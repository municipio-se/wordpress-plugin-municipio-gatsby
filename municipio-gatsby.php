<?php

/**
 * Plugin Name:       Municipio Gatsby
 * Description:       Adapts Municipio for Gatsby
 * Version:           0.1.0
 * Author:            Whitespace Dev
 */

define("MUNICIPIO_GATSBY_PATH", dirname(__FILE__));
define("MUNICIPIO_GATSBY_AUTOLOAD_PATH", MUNICIPIO_GATSBY_PATH . "/autoload");

array_map(static function () {
  include_once func_get_args()[0];
}, glob(MUNICIPIO_GATSBY_AUTOLOAD_PATH . "/*.php"));
