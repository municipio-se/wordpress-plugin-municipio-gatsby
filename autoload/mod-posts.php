<?php

add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Columns
      acf_remove_local_field("field_571dfdf50d9da");

      // Link to post type archive
      acf_remove_local_field("field_57ecf1007b749");

      // Hide the title column
      acf_remove_local_field("field_591176fff96d6");

      // Title column label
      acf_remove_local_field("field_57e3bcae3826e");

      // List column labels
      acf_remove_local_field("field_571f5776592e6");

      // Allow freetext filtering
      acf_remove_local_field("field_59197c6dafb31");

      // Permalink
      acf_remove_local_field("field_576261c3ef10e");

      // Bild
      acf_remove_local_field("field_57625930110b3");

      // Column values
      acf_remove_local_field("field_57625a3e188da");
    }
    if (function_exists("acf_remove_local_field_group")) {
      // Data sorting
      acf_remove_local_field_group("group_571dffc63090c");

      // Data filtering
      acf_remove_local_field_group("group_571e045dd555d");

      // Taxonomy display
      acf_remove_local_field_group(
        "group_" . md5("mod_posts_taxonomy_display")
      );
    }
  },
  20
);

// Display as
add_filter("acf/load_field/key=field_571dfd4c0d9d9", function ($field) {
  // Remove unimplemented and deprecated options
  unset($field["choices"]["items"]); // post items
  unset($field["choices"]["news"]); // news items
  unset($field["choices"]["grid"]);
  unset($field["choices"]["circular"]);
  unset($field["choices"]["horizontal"]);
  // Add new options
  $field["choices"]["blocks"] = __("Blocks", "municipio-gatsby");

  return $field;
});

// Fields
add_filter("acf/load_field/key=field_571e01e7f246c", function ($field) {
  unset($field["choices"]["title"]);
  return $field;
});

// Layout
add_action(
  "acf/init",
  function () {
    acf_add_local_field([
      "key" => "field_mod_posts_display_layout",
      "label" => __("Layout", "muncipio-gatsby"),
      "name" => "layout",
      "parent" => "group_571dfd3c07a77", // Data display
      "type" => "radio",
      "layout" => "horizontal",
      "default_value" => "grid",
      "choices" => [
        "grid" => __("Grid of items", "municipio-gatsby"),
        "mixed" => __("Items and list", "municipio-gatsby"),
        // "desc" => __("Horizontal scroll"),
      ],
      "conditional_logic" => [
        [
          [
            "field" => "field_571dfd4c0d9d9",
            "operator" => "==",
            "value" => "index",
          ],
        ],
        [
          [
            "field" => "field_571dfd4c0d9d9",
            "operator" => "==",
            "value" => "blocks",
          ],
        ],
      ],
    ]);
  },
  20
);

// Manual input > Link
add_action(
  "acf/init",
  function () {
    acf_add_local_field([
      "key" => "field_mod_posts_manual_input_link",
      "label" => __("Link", "muncipio-gatsby"),
      "name" => "link",
      "parent" => "field_576258d3110b0", // Data display
      "type" => "link",
    ]);
  },
  20
);
