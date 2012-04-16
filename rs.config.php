<?php
    spl_autoload_register(function($class)
    {
        if($class == 'DOMTemplate')
            require_once(dirname(__FILE__).'/domtemplate.php');
    });
