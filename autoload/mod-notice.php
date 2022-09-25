<?php

add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Icon
      acf_remove_local_field("field_575a84a0ea3b5");
    }
  },
  20
);
