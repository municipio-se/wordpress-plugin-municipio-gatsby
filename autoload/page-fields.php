<?php

/**
 * Adds `showInMenu` field to `Page`
 */
add_action("graphql_register_types", function ($type_registry) {
  $type_registry->register_field("Page", "showInMenu", [
    "type" => "Boolean",
    "resolve" => function ($post) {
      return !get_field("hide_in_menu", $post->ID);
    },
  ]);
});

/**
 * Adds `label` field to `Page`
 */
add_action("graphql_register_types", function ($type_registry) {
  $type_registry->register_field("Page", "label", [
    "type" => "String",
    "resolve" => function ($post) {
      return get_field("custom_menu_title", $post->ID) ?:
        get_post_field("post_title", $post->ID, "raw");
    },
  ]);
});
