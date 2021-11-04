<?php

/**
 * Adds gallery settings
 */
add_action(
  "acf/init",
  function () {
    acf_add_local_field_group([
      "key" => "group_municipio_gatsby_gallery_settings",
      "title" => __("Settings", "municipio-gatsby"),
      "fields" => [
        [
          "key" => "group_municipio_gatsby_gallery_settings_options",
          "label" => __("Display settings", "municipio-gatsby"),
          "name" => "display",
          "type" => "checkbox",
          "show_in_graphql" => 1,
          "choices" => [
            "hide_text" => __("Hide caption", "municipio-gatsby"),
            "hide_photograph" => __("Hide photographer", "municipio-gatsby"),
            "autoplay" => __("Autoplay", "municipio-gatsby"),
          ],
        ],
        [
          "key" => "group_municipio_gatsby_gallery_settings_pause_on_hover",
          "label" => __("Pause automatically on hover", "municipio-gatsby"),
          "name" => "pause_on_hover",
          "type" => "true_false",
          "show_in_graphql" => 1,
          "conditional_logic" => [
            [
              [
                "field" => "group_municipio_gatsby_gallery_settings_options",
                "operator" => "==",
                "value" => "autoplay",
              ],
            ],
          ],
        ],
      ],
      "location" => [
        [
          [
            "param" => "post_type",
            "operator" => "==",
            "value" => "mod-gallery",
          ],
        ],
      ],
      "show_in_graphql" => 1,
      "graphql_field_name" => "settings",
    ]);
  },
  20
);
