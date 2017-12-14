<?php
/**
 * Enqueue Configuration
 *
 * Will add js or css file to Wordpress.
 * Setting js or css file here will load them into Wordpress each time the plugin is run.
 * In order to add js or css file specific to a component, please refer to the component configuration instead.
 *
 * $config['enqueue']['admin']['js']   => $files  (array)(Required) An array of js files to load at the admin section of WordPress.
 * $config['enqueue']['admin']['css']  => $files  (array)(Required) An array of css files to load at the admin section of WordPress.
 *
 * $config['enqueue']['front']['js']   => $files  (array)(Required) An array of js files to load at the front end section of WordPress.
 * $config['enqueue']['front']['css']  => $files  (array)(Required) An array of css files to load at the front end section of WordPress.
 *
 * $files is an array containing a list of javascript or css file path (without the extension) to load within WordPress.
 * File path value is relative to your plugin assets/js or assets/css directory.
 * Ex: test.js file is located under assets/js/vendor/test.js then the path value should be 'vendor/test'
 * Ex: test.css file is located under assets/css/test.css then the path value should be 'test'
 *
 *========================================================================================================================*/
