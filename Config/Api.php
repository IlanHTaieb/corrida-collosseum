<?php

namespace Config;

class Api
{
    public function __construct()
    {
        if(isset($_POST['action'])) {
            $this->post = $_POST['action'];

            $this->setUp();
        }
    }

    protected function setup()
    {
        switch($this->post) {
            case 'sign_in':
                
        }
    }
}