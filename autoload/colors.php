<?php

use WPMunicipioGatsby\BrandColorDef;

if (!function_exists("set_acf_group_graphql_field_name")) {
  function set_acf_group_graphql_field_name($key, $name) {
    add_action(
      "init",
      function () use ($key, $name) {
        if (!function_exists("acf_get_local_store")) {
          return;
        }
        $store = acf_get_local_store("groups");
        $group = $store->get($key);
        if (empty($group)) {
          return;
        }
        $group["show_in_graphql"] = true;
        $group["graphql_field_name"] = $name;
        $store->set($key, $group);
      },
      20 // Run after Municipio theme bootstrap
    );
  }
}

// Color scheme
set_acf_group_graphql_field_name("group_56a0a7dcb5c09", "colorScheme");

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

// Brand colors
add_action(
  "acf/init",
  function () {
    acf_add_local_field([
      "key" => "field_municipio_gatsby_brand_colors",
      "label" => __("Brand colors", "municipio-gatsby"),
      "name" => "layout",
      "parent" => "group_56a0a7dcb5c09", // Color scheme
      "type" => "textarea",
      "show_in_graphql" => false,
    ]);
  },
  20
);

function municipio_gatsby_get_color_choices() {
  $encoded = get_field("field_municipio_gatsby_brand_colors", "option");
  $def = new BrandColorDef($encoded);
  return $def->getColorOptions();
}

add_action(
  "graphql_register_types",
  function ($type_registry) {
    $type_registry->register_object_type(
      "AcfOptionsThemeOptions_Colorscheme_BrandColor",
      [
        "fields" => [
          "key" => ["type" => "String"],
          "value" => ["type" => "String"],
          "label" => ["type" => "String"],
          "name" => ["type" => "String"],
        ],
      ]
    );
    $type_registry->register_field(
      "AcfOptionsThemeOptions_Colorscheme",
      "brandColors",
      [
        "type" => [
          "list_of" => "AcfOptionsThemeOptions_Colorscheme_BrandColor",
        ],
        "resolve" => function () {
          $encoded = get_field("field_municipio_gatsby_brand_colors", "option");
          $def = new BrandColorDef($encoded);
          return array_values($def->getNormalized());
        },
      ]
    );
    $type_registry->register_field(
      "AcfOptionsThemeOptions_Colorscheme",
      "brandColorsSource",
      [
        "type" => "String",
        "resolve" => function () {
          return get_field("field_municipio_gatsby_brand_colors", "option");
        },
      ]
    );
  },
  20
);

function municipio_gatsby_get_theme_field($extra = []) {
  $options = municipio_gatsby_get_color_choices();
  $options = array_merge(
    // ["" => __("None", "municipio-gatsby")],
    array_combine($options, $options)
  );
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
            [
              // Disable theme color for expandable list
              "field" => "field_571dfd4c0d9d9",
              "operator" => "!=",
              "value" => "expandable-list",
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
