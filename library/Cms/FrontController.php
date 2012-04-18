<?php

namespace Cms;

use Cms\View;

abstract class FrontController
{
	protected $view;
	
	public function __construct ()
	{
		$this->view = View\Controller::getInstance();
	}
}