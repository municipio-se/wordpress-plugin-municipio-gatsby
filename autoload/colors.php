<?php

add_action(
  "init",
  function () {
    if (!function_exists("acf_remove_local_field")) {
      return;
    }
    // Custom color scheme
    acf_remove_local_field("field_5a9945a41d637");
    // Color scheme
    acf_remove_local_field("field_56a0a7e36365b");
    // Color scheme
    acf_remove_local_field("field_5a9946401d638");
  },
  20
);

function municipio_gatsby_get_theme_field($extra = []) {
  $options = [
    // ["" => __("None", "municipio-gatsby")],
  ];
  $options = apply_filters("municipio-gatsby/color-choices", $options, $extra);
  $field_theme_color_options = [
    "key" => "field_5fae89a2efe55",
    "label" => __("Theme color", "municipio-gatsby"),
    "name" => "theme",
    "type" => count($options) > 8 ? "select" : "radio",
    // "parent" => "", // Intentionally left out
    "instructions" => "",
    "show_in_graphql" => true,
    "graphql_field_name" => "theme",
    "choices" => $options,
    "default_value" => "",
    "allow_null" => false,
    "other_choice" => false,
    "save_other_choice" => false,
    "layout" => "horizontal",
    "return_format" => "value",
  ];
  return array_merge($field_theme_color_options, $extra);
}

// Theme color
add_action(
  "acf/init",
  function () {
    // For ModText
    acf_add_local_field(
      municipio_gatsby_get_theme_field([
        "parent" => "group_5891b49127038",
        "conditional_logic" => [
          [
            [
              // Hide box frame
              "field" => "field_5891b6038c120",
              "operator" => "!=",
              "value" => "1",
            ],
          ],
        ],
      ])
    );

    // For ModPosts
    acf_add_local_field(
      municipio_gatsby_get_theme_field([
        "parent" => "group_571dfd3c07a77",
      ])
    );

    // // For ModTable
    // acf_add_local_field(
    //   municipio_gatsby_get_theme_field([
    //     "parent" => "group_5666a2a71d806",
    //   ])
    // );
  },
  20
);

// Data input
add_filter("acf/load_field/key=field_576258d3110b0", function ($field) {
  $field["sub_fields"][] = municipio_gatsby_get_theme_field();
  return $field;
});
