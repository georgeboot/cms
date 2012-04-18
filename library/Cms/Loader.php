<?php

namespace Cms;

class Loader
{
	public static function autoLoad ($lib)
	{
		$lib = str_replace('\\', DS, $lib);
		$file = BASE_PATH_LIB . DS . $lib . '.php';
		
        //var_dump($lib);
        
		if (file_exists($file))
		{
		    require_once($file);
        }
        else
        {
            throw new \Exception("class {$lib} not found in library");
        }
	}
}