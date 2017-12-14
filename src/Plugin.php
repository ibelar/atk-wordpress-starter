<?php
/**
 * The Plugin implementation.
 */

namespace atkstarter;

use atkwp\interfaces\PluginInterface;
use atkwp\AtkWp;

class Plugin extends AtkWp implements PluginInterface
{
    public function init()
    {
        // Uncommented this for database connectivity.
        //$this->setDbConnection();
    }

    public function activatePlugin()
    {
        // TODO: Implement activatePlugin() method.
    }

    public function deactivatePlugin()
    {
        // TODO: Implement deactivatePlugin() method.
    }

    public function uninstallPlugin()
    {
        // TODO: Implement uninstallPlugin() method.
    }
}