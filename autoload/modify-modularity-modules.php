<?php

function municipio_gatsby_is_modularity_page($post_type) {
  return strpos($post_type, "mod-") === 0;
}

function municipio_gatsby_rename_publish_button() {
  global $pagenow;

  if (
    isset($pagenow) &&
    $pagenow == "post-new.php" &&
    isset($_GET["post_type"]) &&
    municipio_gatsby_is_modularity_page($_GET["post_type"])
  ) {
    add_filter(
      "gettext",
      function ($translation, $text, $domain) {
        if ($text === "Publish") {
          return __("Save");
        }
        return $translation;
      },
      10,
      3
    );
  }
}

add_action("init", "municipio_gatsby_rename_publish_button");
