<?php

class Autoloader
{
    static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    static function autoload($class_name)
    {
        $class_name = str_replace('\\', '/', $class_name);

        require $class_name . '.php';
    }
}