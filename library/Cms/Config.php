<?php

namespace Cms;

class Config
{
	private static $_instance;
    protected static $_rawConfig, $_registry;
	
	public static function getInstance ( $forceNewInstance = false )
	{
		if (null === self::$_instance) self::$_instance = new self();
		return self::$_instance;
	}
    
    public function __construct ()
    {
        $this->_rawConfig = require 'config/global.config.php';
        //$this->_registry = (object) $this->_rawConfig;
    }
    
    public function getRawConfig ()
    {
        //return $this->_registry;
        return $this->_rawConfig;
    }
}