<?php

add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Font size
      acf_remove_local_field("field_5891b4982999e");
    }
  },
  20
);
