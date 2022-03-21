<?php

function is_modularity_page($post_type) {
  return strpos($post_type, "mod-") === 0;
}

function rename_modularity_publish_button() {
  global $pagenow;

  if (
    isset($pagenow) &&
    $pagenow == "post-new.php" &&
    isset($_GET["post_type"]) &&
    is_modularity_page($_GET["post_type"])
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

add_action("init", "rename_modularity_publish_button");
