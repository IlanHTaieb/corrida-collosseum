<?php

namespace Config;

use App\Controllers\PersonnagesController;


class Api
{
    public function __construct()
    {
        if(isset($_POST['action'])) {
            $this->post = (object) $_POST;

            $this->load();
        }
    }

    protected function load()
    {
        switch($this->action) {
            case 'sign_in':
                
                var_dump($this->post);
            break;
        }
    }
}