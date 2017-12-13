<?php

/*
Plugin Name: Atk Wordpress Starter
Description:A starter plugin to get you start using atk-wordpress.
Version: 1.0
Author: Alain Belair
Author URI: https://github.com/ibelar
License: MIT
*/

namespace atkstarter; //TODO rename to your namespace.

use atkwp\controllers\ComponentController;
use atkwp\helpers\Pathfinder;

require 'vendor/autoload.php';

if (array_search(ABSPATH . 'wp-admin/includes/plugin.php', get_included_files()) === false) {
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

$atk_plugin_name = "atk-starter"; //TODO rename to your plugin name.
$atk_plugin = __NAMESPACE__."\\Plugin";

$$atk_plugin_name = new  $atk_plugin($atk_plugin_name, new Pathfinder(plugin_dir_path(__FILE__)), new ComponentController());

if (!is_null( $$atk_plugin_name)) {
    $$atk_plugin_name->boot(__FILE__);
}
