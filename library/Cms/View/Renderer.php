<?php

namespace Cms\View;

class Renderer
{
	private static $_instance;
	
	public static function getInstance ( $forceNewInstance = false )
	{
		if (null === self::$_instance) self::$_instance = new self();
		return self::$_instance;
	}
	
	public function render ()
	{
		$view = Controller::getInstance();
        $view->renderTemplate();
	}
}