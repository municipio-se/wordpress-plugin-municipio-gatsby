<?php

use GraphQL\Type\Definition\ResolveInfo;
use WPGraphQL\AppContext;
// use WPGraphQL\Data\Connection\MenuConnectionResolver;
use WPGraphQL\Data\Connection\PostObjectConnectionResolver;
use WPGraphQL\Data\Connection\TermObjectConnectionResolver;
use WPGraphQL\Model\Post as PostModel;

add_filter(
  "register_post_type_args",
  function ($args, $post_type) {
    if ($post_type == "np-redirect") {
      $args["show_in_graphql"] = true;
      $args["show_in_rest"] = true;
      $args["publicly_queryable"] = true;
      $args["public"] = true;
      $args["graphql_single_name"] = "npRedirect";
      $args["graphql_plural_name"] = "npRedirects";
      $args["supports"][] = "page-attributes";
    }
    return $args;
  },
  10,
  2
);

add_action("mu_plugins_loaded", function () {
  if (!is_admin()) {
    new NestedPages\Bootstrap();
  }
});

add_filter(
  "graphql_return_field_from_model",
  function (
    $field,
    $key,
    $model_name,
    $post,
    $visibility,
    $owner,
    $current_user
  ) {
    if ($post->post_type == "np-redirect") {
      $np_nav_menu_item_type = get_post_meta(
        $post->ID,
        "_np_nav_menu_item_type",
        true
      );
      switch ($np_nav_menu_item_type) {
        case "custom":
          if ($key == "uri") {
            $field = $post->post_content;
          }
          break;
      }
    }
    return $field;
  },
  10,
  7
);

add_action("graphql_register_types", function ($type_registry) {
  $type_registry->register_connection([
    "fromType" => "NpRedirect",
    "toType" => "MenuItemLinkable",
    "fromFieldName" => "connectedNode",
    // "connectionInterfaces" => ["MenuItemLinkableConnection"],
    // "description" => __(
    //   'Connection from MenuItem to it\'s connected node',
    //   "wp-graphql"
    // ),
    "oneToOne" => true,
    "resolve" => function (
      PostModel $np_nav_menu_item,
      $args,
      AppContext $context,
      ResolveInfo $info
    ) {
      if (!isset($np_nav_menu_item->databaseId)) {
        return null;
      }

      $object_id = (int) get_post_meta(
        $np_nav_menu_item->databaseId,
        "_np_nav_menu_item_object_id",
        true
      );
      $object_type = get_post_meta(
        $np_nav_menu_item->databaseId,
        "_np_nav_menu_item_type",
        true
      );

      $resolver = null;
      switch ($object_type) {
        // Post object
        case "post_type":
          $resolver = new PostObjectConnectionResolver(
            $np_nav_menu_item,
            $args,
            $context,
            $info
          );
          $resolver->set_query_arg("p", $object_id);
          break;

        // Taxonomy term
        case "taxonomy":
          $resolver = new TermObjectConnectionResolver(
            $np_nav_menu_item,
            $args,
            $context,
            $info
          );
          $resolver->set_query_arg("include", $object_id);
          break;
        // default:
        //   $resolved_object = null;
        //   break;
      }

      return null !== $resolver
        ? $resolver->one_to_one()->get_connection()
        : null;
    },
  ]);
});
