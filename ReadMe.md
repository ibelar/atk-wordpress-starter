# Atk-wordpress starter plugin

This wordpress plugin is done using Agile Toolkit and the Agile Toolkit integration for Wordpress.

## Require

The project require [composer](https://getcomposer.org/) in order to install all it's dependencies.

## Install

 - Download or clone this repository inside your Wordpress installation plugins folder;
 - Edit the composer.json file by updating the namespace to your own namespace;
 - Rename atk-starter.php file and edit content in order to update it to your own plugin name, namespace and description;
 - Run composer install;
 - Visit you Wordpress plugin admin page and activate it.
    - The starter plugin come with a default admin panel "HelloAtkWp.php" accesible in worpress admin once the plugin is activate.
 - Add Wordpress components via configuration file and setup each component UI using [Agile toolkit UI](http://agiletoolkit.org). Wordpress components can be:
    - admin panels and sub-panels,
    - widgets,
    - dashboard widgets,
    - shortcodes,
    - meta boxes,

 More info on [atk-wordpress](http://github.com/ibelar/atk-wordpress)
