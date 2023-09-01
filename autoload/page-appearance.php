<?php

// Removes all page templates from all post types
add_action(
  "init",
  function () {
    global $wp_post_types;

    foreach (array_keys($wp_post_types) as $post_type_slug) {
      add_filter(
        "theme_" . $post_type_slug . "_templates",
        function ($page_templates) use ($post_type_slug) {
          return [];
        },
        20
      );
    }
  },
  999
);

// Adds "Page appearance" field group on pages
add_action("acf/init", function () {
  $page_templates = [
    "default" => __("Default", "municipio-gatsby"),
    // "landingPage" => __("Landing page", "municipio-gatsby"),
  ];
  $page_templates = apply_filters(
    "whitespace_a11ystack_page_templates",
    $page_templates
  );
  acf_add_local_field_group([
    "key" => "group_page_appearance",
    "title" => __("Page appearance", "municipio-gatsby"),
    "fields" => [
      [
        "key" => "field_page_appearance_template",
        "label" => __("Page template", "municipio-gatsby"),
        "name" => "template",
        "type" => "select",
        "default_value" => "default",
        "choices" => $page_templates,
        "return_format" => "value",
        "show_in_graphql" => 1,
        // Hide the field if there is only one choice
        "wrapper" => [
          // Hide the field if there is only one choice
          "style" => count($page_templates) > 1 ? null : "display:none;",
        ],
      ],
    ],
    "location" => [
      [
        [
          "param" => "post_type",
          "operator" => "==",
          "value" => "page",
        ],
      ],
    ],
    "position" => "side",
    "show_in_graphql" => 1,
    "graphql_field_name" => "pageAppearance",
  ]);
});
