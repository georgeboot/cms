<?php

namespace Main;

use \Cms\Events,
    \Cms\Database;

class Main
{
    public function init ()
    {
        $eventHandler = \Cms\Event\FrameworkEvent::getInstance();
        
        $eventHandler->fire('onBeforeModuleInit');
        
        // init the shizzle
        // suc as: register autoloaders, routes etc.
        
        $eventHandler->fire('onAfterModuleInit');
    }
    
    public function getConfig ()
    {
        return require 'config.php';
    }
}