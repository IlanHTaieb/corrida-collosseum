<?php

namespace Config;

use App\Models\Database;
use App\Models\Personnage;
use App\Controllers\PersonnagesController;


class Api
{
    public function __construct()
    {
        if(isset($_POST['action'])) {
            $this->post = (object) $_POST;
            $this->personnage = new Personnage($_POST);
            $this->personnages_controller = new PersonnagesController(new Database);

            $this->load();
        }
    }

    protected function load()
    {
        switch($this->post->action) {
            case 'sign_in':
                $_SESSION['perso'] = $this->post->name;
                $this->personnages_controller->store($this->post);
            break;
        }
    }
}