<?php

add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Conditional logic
      acf_remove_local_field("field_59b69b14e2abf");
      acf_remove_local_field("field_59b69ae3e2abd");
      acf_remove_local_field("field_59b69ac9e2abb");
      acf_remove_local_field("field_59b69ab2e2ab9");
      acf_remove_local_field("field_59b69a93e2ab7");
      acf_remove_local_field("field_59b69a7ae2ab5");
      acf_remove_local_field("field_59b134beb61b0");
      acf_remove_local_field("field_5a266baf943ad");
      // Conditional field
      acf_remove_local_field("field_59b69b16e2ac0");
      acf_remove_local_field("field_59b69ae6e2abe");
      acf_remove_local_field("field_59b69acbe2abc");
      acf_remove_local_field("field_59b69ab5e2aba");
      acf_remove_local_field("field_59b69a96e2ab8");
      acf_remove_local_field("field_59b69a7de2ab6");
      acf_remove_local_field("field_59b635765e86b");
      acf_remove_local_field("field_5a266baf943ae");
    }
  },
  20
);

// Fields
add_filter("acf/load_field/key=field_58eb302883a68", function ($field) {
  // Remove unimplemented field types
  $disabled_layouts = apply_filters(
    "municipio-gatsby/mod-form/mod-form-options/fields/disabled-layouts",
    [
      "58eccdd75ad90", // File upload
      "5a266baf943ab", // Collapse
    ],
    $field["layouts"]
  );
  foreach ($disabled_layouts as $layout) {
    unset($field["layouts"][$layout]); // File upload
  }
  return $field;
});
