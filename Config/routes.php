<?php

namespace Config;

class Routes
{
    public static function register()
    {
        $page = 'home';

        if(isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        return require '../views/pages/' . $page . '.php';
    }
}
