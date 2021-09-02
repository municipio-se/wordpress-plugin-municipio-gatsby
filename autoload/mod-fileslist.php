<?php

// Remove unimplemented fields for the Fileslist module
add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Columns
      acf_remove_local_field("field_57fb42a3cb414");
      // Filter
      acf_remove_local_field("field_587600817ff7f");
      // Files > Fields
      acf_remove_local_field("field_57fb423bcb410");
    }
  },
  20
);
