<?php

add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Columns
      acf_remove_local_field("field_571dfdf50d9da");

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

      // Data filtering
      acf_remove_local_field("field_571e046536f0f"); // Taxonomy filter
      acf_remove_local_field("field_571e048136f10"); // Taxonomy type
      acf_remove_local_field("field_571e049636f11"); // Taxonomy value
      acf_remove_local_field("field_571e04a736f12"); // Meta filter
      acf_remove_local_field("field_571e04c736f13"); // Meta key
      acf_remove_local_field("field_571e04da36f14"); // Meta value
      // acf_remove_local_field('field_5af2f2e486366'); // Front End taxonomy filtering
      acf_remove_local_field("field_5af2f64510be1"); // Front End Text search
      acf_remove_local_field("field_5af2f68810be2"); // Front End Date range
      acf_remove_local_field("field_5af2f6fb10be3"); // Front End Taxonomy
      acf_remove_local_field("field_5b0d0c3f955b6"); // Front End Button text
      acf_remove_local_field("field_5b0d103f8dc5a"); // Front End Hide date
      acf_remove_local_field("field_5b0d10e78dc5b"); // Front End Display
    }
    if (function_exists("acf_remove_local_field_group")) {
      // // Data sorting
      acf_remove_local_field_group("group_571dffc63090c");

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
  unset($field["choices"]["index"]);
  unset($field["choices"]["circular"]);
  unset($field["choices"]["horizontal"]);

  // Add new options
  $field["choices"]["mixed"] = __("Items and list", "municipio-gatsby");

  $field["choices"] = apply_filters(
    "municipio-gatsby/mod-posts/data_display/fields/display_as/choices",
    $field["choices"]
  );

  return $field;
});

// Fields
add_filter("acf/load_field/key=field_571e01e7f246c", function ($field) {
  // Remove unimplemented options
  unset($field["choices"]["title"]);

  return $field;
});

// Front End taxonomy filtering
add_filter("acf/load_field/key=field_5af2f2e486366", function ($field) {
  $field["label"] = __("Allow user to filter results", "municipio-gatsby");

  // XXX: This doesn’t really work because "Data source" is in another field group.
  // $field["conditional_logic"] = [
  //   [
  //     [
  //       "field" => "field_571dfaafe6984", // Data source
  //       "operator" => "==",
  //       "value" => "posttype",
  //     ],
  //   ],
  // ];

  // XXX: So we provide instructions instead.
  $field["instructions"] = __(
    "Only works if data source is set to post type",
    "municipio_gatsby"
  );

  // Removes dependence on the "Taxonomy filter" field
  unset($field["conditional_logic"]);
  $field["wrapper"] = [];

  return $field;
});

// Manual input > Link
add_action(
  "acf/init",
  function () {
    acf_add_local_field([
      "key" => "field_mod_posts_manual_input_link",
      "label" => __("Link", "municipio-gatsby"),
      "name" => "link",
      "parent" => "field_576258d3110b0", // Data display
      "type" => "link",
      "instructions" => __(
        "Only available if display mode is cards or blocks",
        "municipio-gatsby"
      ),
    ]);
  },
  20
);
