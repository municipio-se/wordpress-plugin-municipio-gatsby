<?php

add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Typ
      acf_remove_local_field("field_57454c24d44d8");

      // Video: MP4
      acf_remove_local_field("field_57454c5ad44db");

      // Video: Webm
      acf_remove_local_field("field_57454c35d44d9");

      // Video: OGG
      acf_remove_local_field("field_57454c49d44da");

      // Placeholder
      acf_remove_local_field("field_57454c7ad44dc");
    }
  },
  20
);

// Embed link
add_filter("acf/load_field/key=field_57454c7ad44dc", function ($field) {
  // Remove conditional logic based on Typ
  unset($field["conditional_logic"]);

  return $field;
});
