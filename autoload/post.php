<?php

add_action("init", function () {
  global $wp_post_types;
  $labels = &$wp_post_types["post"]->labels;
  $labels->name = _x("News", "Post Type General Name", "municipio-gatsby");
  $labels->singular_name = _x(
    "News",
    "Post Type Singular Name",
    "municipio-gatsby"
  );
  $labels->add_new = __("Add news", "municipio-gatsby");
  $labels->add_new_item = __("Add news", "municipio-gatsby");
  $labels->edit_item = __("Edit news", "municipio-gatsby");
  $labels->new_item = _x("News", "Post Type Singular Name", "municipio-gatsby");
  $labels->view_item = __("View news", "municipio-gatsby");
  $labels->search_items = __("Search news", "municipio-gatsby");
  $labels->not_found = __("No news found", "municipio-gatsby");
  $labels->not_found_in_trash = __(
    "No news found in Trash",
    "municipio-gatsby"
  );
  $labels->all_items = __("All news", "municipio-gatsby");
  $labels->menu_name = _x("News", "Post Type General Name", "municipio-gatsby");
  $labels->name_admin_bar = _x(
    "News",
    "Post Type General Name",
    "municipio-gatsby"
  );
  $labels->archives = __("News archive", "municipio-gatsby");
});
add_filter(
  "register_post_type_args",
  function ($args, $post_type) {
    if ("post" == $post_type) {
      $args["has_archive"] = true;
    }
    return $args;
  },
  10,
  2
);
