<?php

use Jawira\CaseConverter\Convert;

function municipio_gatsby_activate() {
  add_option("municipio_gatsby_activated", true);
}

add_action("admin_init", function () {
  if (empty(get_option("municipio_gatsby_activated"))) {
    return;
  }

  global $wp_rewrite;

  // Update permalink structure
  $post_type_object = get_post_type_object("post");
  $slug = (new Convert($post_type_object->labels->name))->toCamel();
  $wp_rewrite->set_permalink_structure("/$slug/%postname%/");

  $modularity_options = get_option("modularity-options") ?: [];
  // Enable Modularity on posts and pages
  if (empty($modularity_options["enabled-post-types"])) {
    $modularity_options["enabled-post-types"] = ["post", "page"];
  }

  // Enable modularity on posts and pages
  $templates = \Modularity\Helper\Wp::getCoreTemplates();
  $templates = apply_filters("Modularity/CoreTemplatesInTheme", $templates);
  // Custom templates can’t be loaded here, so we just skip those.
  if (empty($modularity_options["enabled-areas"])) {
    $modularity_options["enabled-areas"] = array_fill_keys(
      array_values($templates),
      ["content-area", "slider-area"]
    );
  }

  // Enable implemented core modules
  if (empty($modularity_options["enabled-modules"])) {
    $modularity_options["enabled-modules"] = [
      "mod-image",
      "mod-notice",
      "mod-posts",
      "mod-text",
    ];
  }

  update_option("modularity-options", $modularity_options);

  delete_option("municipio_gatsby_activated");
});

register_activation_hook(
  MUNICIPIO_GATSBY_PLUGIN_FILE,
  "municipio_gatsby_activate"
);
