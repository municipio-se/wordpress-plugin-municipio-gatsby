<?php

/**
 * Plugin Name: Municipio Gatsby
 * Description: Adapts Municipio for Gatsby
 * Version: 1.0.1
 * Author: Whitespace Dev
 * Text Domain: municipio-gatsby
 * Domain Path: /languages/
 */

define("MUNICIPIO_GATSBY_PLUGIN_FILE", __FILE__);
define("MUNICIPIO_GATSBY_PATH", dirname(__FILE__));
define("MUNICIPIO_GATSBY_AUTOLOAD_PATH", MUNICIPIO_GATSBY_PATH . "/autoload");
define("MUNICIPIO_GATSBY_LANGUAGES_PATH", plugin_basename(dirname(__FILE__)) . "/languages");

add_action("plugins_loaded", function () {
  load_plugin_textdomain("municipio-gatsby", false, MUNICIPIO_GATSBY_LANGUAGES_PATH);
});

add_action("muplugins_loaded", function () {
  load_muplugin_textdomain("municipio-gatsby", MUNICIPIO_GATSBY_LANGUAGES_PATH);
});

array_map(static function () {
  include_once func_get_args()[0];
}, glob(MUNICIPIO_GATSBY_AUTOLOAD_PATH . "/*.php"));
