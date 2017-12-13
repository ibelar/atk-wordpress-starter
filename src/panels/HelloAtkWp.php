<?php
/**
 * A simple Wordpress admin panel.
 */

namespace atkstarter\panels;

use atkwp\components\PanelComponent;

class HelloAtkWp extends PanelComponent
{
    public function init()
    {
        parent::init();

        $this->add([
            'Message',
            'Agile Toolkit for Wordpress!',
        ]);
    }
}
