<?php

namespace Main;

use \Cms\FrontController,
    \Cms\Encryption,
    \Cms\Database;

final class MainController extends \Cms\FrontController
{
    public function indexAction ()
    {
        $string = 'geheim wachtwoord dat niemand mag weten en daarom heel erg lang is, je moet er immers voor zorgen dat ze het wachtwoord niet zomaar kunnen raden. maak je hem heel lang, dan verklein die die kans gelukkig! Hoe vinden jullie mijn BlowFish 64-bits encryptie :-) ?';
        $encrypted = Encryption\Blowfish::encrypt($string);
        $decrypted = Encryption\Blowfish::decrypt($encrypted);
        
        $this->view->assign('encryption', array(
            'before'    => $string,
            'on'        => $encrypted,
            'after'     => $decrypted
        ));
        
        $this->view->assign('headertekst', 'dit is de h1');
        $this->view->assign('variableForUseInView', '... en dit de eerste p!');
        
        $this->view->setTemplate('Main');
    }
    
    public function testAction ()
    {
        echo 'dit is de test action';
    }
    
    public function dbAction ()
    {
        $db = Factory::getMysqlInstance();
        
        print_r($db);
    }
}


/**
 * Attach helpers
 * $this->view->attachHelper(array('dhdh','dhd'));
 * 
 * Set template rendering modus
 * $this->view->setRenderingModus();
 * 
 */