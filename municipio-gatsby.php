<?php

/**
 * Plugin Name: Municipio Gatsby
 * Description: Adapts Municipio for Gatsby
 * Version: 0.8.0
 * Author: Whitespace Dev
 * Text Domain: municipio-gatsby
 * Domain Path: /languages/
 */

define("MUNICIPIO_GATSBY_PLUGIN_FILE", __FILE__);
define("MUNICIPIO_GATSBY_PATH", dirname(__FILE__));
define("MUNICIPIO_GATSBY_AUTOLOAD_PATH", MUNICIPIO_GATSBY_PATH . "/autoload");

add_action("init", function () {
  $path = plugin_basename(dirname(__FILE__)) . "/languages";
  load_plugin_textdomain("municipio-gatsby", false, $path);
  load_muplugin_textdomain("municipio-gatsby", $path);
});

array_map(static function () {
  include_once func_get_args()[0];
}, glob(MUNICIPIO_GATSBY_AUTOLOAD_PATH . "/*.php"));
