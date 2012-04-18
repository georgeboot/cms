<?php

class CurrencyViewHelper extends ViewHelper
{
	public function printLink($title, $destenation)
    {
        return '<a href="'.$destenation.'">'.$title.'</a>';
    }
}
