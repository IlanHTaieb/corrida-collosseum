<?php

namespace Middlewares;

class Routes
{
    public static function register()
    {
        $page = 'home';
        $status = isset($_SESSION['gladiator']) ? 'auth' : 'guest';
        $config = require '../configs/routes.php';
        
        foreach($config['all'] as $values) {
            array_push($config[$status], $values);
        }

        $config = (object) $config;
        
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        if(in_array($page, $config->$status)) {
            return require '../views/pages/' . $page . '.php';
        }

        if ($status == 'auth') {
            return header('Location: ?page=arena');
        }

        return header('Location: ?page=sign_in');
    }

    public function controller()
    {
        var_dump(require '../configs/routes.php');
        die();
    }
}
