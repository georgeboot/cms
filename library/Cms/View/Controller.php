<?php

namespace Cms\View;

/**
 * ViewController
 * 
 * Deze classe is de $this->view in de controller, en de $this in de template.
 * De classe parst alle data voor de view. Denk hierbij aan:
 * - view helpers
 * - view variablen
 * - view config
 * - rendering
 */

class Controller
{
	private static $_instance;
	private $_registry, $_template;
    protected $_helpers = array();
    public $helper;
	
	public static function getInstance ( $forceNewInstance = false )
	{
		if (null === self::$_instance) self::$_instance = new self();
		return self::$_instance;
	}
	
	public function assign ($name, $value)
	{
		$this->$name = $value;
	}
    
    public function setTemplate ( $templateName )
    {
        $this->_template = $templateName;
    }
    
    public function renderTemplate ()
    {
        require 'views/scripts/' . $this->_template . '.phtml';
    }
    
    public function render ( $templateFile )
    {
        require 'views/scripts/' . $templateFile;
    }
}