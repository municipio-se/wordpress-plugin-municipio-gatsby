<?php

// Remove unimplemented fields for the Contacts module
add_action("init", function () {
  if (function_exists("acf_remove_local_field")) {
    // Display mode
    acf_remove_local_field("field_5805e5dc1da44");
    // Columns
    acf_remove_local_field("field_5805e5dc1ddcd");
    // Compact mode
    acf_remove_local_field("field_5bffd2f45667f");
    // Display settings
    acf_remove_local_field("field_5bf7eec6ce764");
  }
});
