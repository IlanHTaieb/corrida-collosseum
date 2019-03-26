<?php

namespace Config;

class Config
{
    public function __construct()
    {
        $this->loadRoutes();

        if(isset($_POST['action'])) {
            $this->loadApi();
        }
    }

    public function loadRoutes()
    {
        Routes::register();
    }

    public function loadApi()
    {
        new Api;
    }

    public function loadStylesheet()
    {
        return Stylesheet::register();
    }
}