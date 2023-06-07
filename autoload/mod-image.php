<?php

// Remove unimplemented fields for the Image module
add_action(
  "admin_init",
  function () {
    if (function_exists("acf_remove_local_field")) {
      // Cropping
      acf_remove_local_field("field_570770f5e2e62");
      // Responsive
      acf_remove_local_field("field_570775955b8de");
      // Crop width
      acf_remove_local_field("field_57077112e2e63");
      // Crop height
      acf_remove_local_field("field_5707712be2e64");
      // Image size
      acf_remove_local_field("field_5707716fabf17");
      // Link
      acf_remove_local_field("field_577d07c8d72db");
      // Link url
      acf_remove_local_field("field_577d0810d72dc");
      // Link page
      acf_remove_local_field("field_577d0840d72dd");
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
      "label" => __("Link", "municipio-gatsby"),
      "name" => "link",
      "parent" => "group_570770ab8f064", // Data display
      "type" => "link",
    ]);
  },
  20
);
