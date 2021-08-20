<?php

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
      "label" => __("Brand colors", "muncipio-gatsby"),
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
  $lines = array_filter(array_map("trim", preg_split("/\R/", $encoded)));
  $decoded = [];
  foreach ($lines as $line) {
    if (preg_match("/([^:\s]+)\s*:\s*(.*)/", $line, $matches)) {
      $key = $matches[1];
      $value = $matches[2];
      $decoded[$key] = $value;
    }
  }
  return $decoded;
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
          $source = municipio_gatsby_get_color_choices();
          $items = [];
          foreach ($source as $key => $value) {
            $items[] = compact("key", "value");
          }
          return $items;
        },
      ]
    );
  },
  20
);

function municipio_gatsby_get_theme_field($extra = []) {
  $options = array_keys(municipio_gatsby_get_color_choices());
  $options = array_merge(
    ["" => __("None", "municipio-gatsby")],
    array_combine($options, $options)
  );
  $field_theme_color_options = [
    "key" => "field_5fae89a2efe55",
    "label" => __("Theme color"),
    "name" => "theme",
    "type" => count($options) > 8 ? "select" : "radio",
    // "parent" => "", // Intentionally left out
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
      ])
    );

    // For ModPosts
    acf_add_local_field(
      municipio_gatsby_get_theme_field([
        "parent" => "group_571dfd3c07a77",
      ])
    );
  },
  20
);

// Data input
add_filter("acf/load_field/key=field_576258d3110b0", function ($field) {
  $field["sub_fields"][] = municipio_gatsby_get_theme_field();
  return $field;
});
