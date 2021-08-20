<?php

if (!function_exists("override_acf_group")) {
  function override_acf_group($key, $override) {
    add_action(
      "init",
      function () use ($key, $override) {
        if (!function_exists("acf_get_local_store")) {
          return;
        }
        $store = acf_get_local_store("groups");
        $group = $store->get($key);
        if (empty($group)) {
          return;
        }
        $group = array_merge($group, $override);
        $store->set($key, $group);
      },
      20 // Run after Municipio theme bootstrap
    );
  }
}

// Search > Display settings
override_acf_group("group_56a72f6430912", [
  "show_in_graphql" => 1,
  "graphql_field_name" => "searchDisplay",
]);

// Header
override_acf_group("group_56a22a9c78e54", [
  "show_in_graphql" => 1,
  "graphql_field_name" => "headerOptions",
]);

// Theme Options > Color Scheme
override_acf_group("group_56a0a7dcb5c09", [
  "show_in_graphql" => 1,
  "graphql_field_name" => "colorScheme",
]);

// Page > Display settings
override_acf_group("group_56c33cf1470dc", [
  "show_in_graphql" => 1,
]);
