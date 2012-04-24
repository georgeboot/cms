<?php

namespace Cms\Router;

class Router
{
    private static $_instance;
    private $_raw;
    private $_module, $_controller, $_action;
    
    public function __construct ()
    {
        // initialize
    }
    
    public static function getInstance ( $forceNewInstance = false )
    {
        if (null === self::$_instance) self::$_instance = new self();
        return self::$_instance;
    }
    
    public function getRoute ()
    {
        return array($this->_module, $this->_controller, $this->_action);
    }
    
    public function initRoute ()
    {
        $this->_raw = explode('/', substr($_SERVER['REQUEST_URI'], 1));
        $this->_module        = (!empty($this->_raw[0])) ? $this->_raw[0] : 'Main';
        $this->_controller    = (!empty($this->_raw[1])) ? $this->_raw[1] : 'Main';
        $this->_action        = (!empty($this->_raw[2])) ? $this->_raw[2] : 'index';
    }
}