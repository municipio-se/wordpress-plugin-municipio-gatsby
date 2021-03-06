<?php

/**
 * Adds "Icon" field to menu items
 */
add_action("acf/init", function () {
  acf_add_local_field_group([
    "key" => "group_municipio_gatsby_menu_item",
    "title" => __("Menu module properties", "municipio-gatsby"),
    "fields" => [
      [
        "key" => "field_municipio_gatsby_menu_item_icon",
        "label" => __("Icon", "municipio-gatsby"),
        "name" => "icon",
        "type" => "text",
      ],
    ],
    "location" => [
      [
        [
          "param" => "nav_menu_item",
          "operator" => "==",
          "value" => "all",
        ],
      ],
    ],
    "show_in_graphql" => true,
    "graphql_field_name" => "extra",
  ]);
});
