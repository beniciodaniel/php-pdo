<?php

require_once 'classes/config.php';

spl_autoload_register('loadClass');

function loadClass($nomeClass)
{
    if (file_exists('classes/' . $nomeClass . '.php'))
    {
        require_once 'classes/' . $nomeClass . '.php';
    }
}