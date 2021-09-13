<?php

add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Data type
      acf_remove_local_field("field_5731982808842");
      // CSV File
      acf_remove_local_field("field_57319c3b08843");
      // CSV Delimiter
      acf_remove_local_field("field_5731a138b52aa");
      // Display options
      acf_remove_local_field("field_56d97e463bf53");
      // Size
      acf_remove_local_field("field_57e8db8cf1ece");
    }
  },
  20
);

// Table
add_filter("acf/load_field/key=field_5666a2ae23643", function ($field) {
  // Remove conditional logic since the "Data type" is removed
  unset($field["conditional_logic"]);
  return $field;
});
