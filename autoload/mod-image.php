<?php

// Remove unimplemented fields for the Image module
add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Link
      acf_remove_local_field("field_577d07c8d72db");
      // Link url
      acf_remove_local_field("field_577d0810d72dc");
    }
  },
  20
);

// Link
add_action(
  "acf/init",
  function () {
    acf_add_local_field([
      "key" => "field_mod_image_link",
      "label" => __("Link", "muncipio-gatsby"),
      "name" => "link",
      "parent" => "group_570770ab8f064", // Data display
      "type" => "link",
    ]);
  },
  20
);
