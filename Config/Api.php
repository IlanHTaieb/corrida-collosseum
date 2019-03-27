<?php

namespace Config;

use App\Models\Gladiator;
use App\Controllers\GladiatorsController;


class Api
{
    public function __construct()
    {
        $this->post = (object) $_POST;
        $this->gladiator = new Gladiator($_POST);
        $this->gladiators_controller = new GladiatorsController('gladiators_table');
        $this->load();
    }

    protected function load()
    {
        switch($this->post->action) {
            case 'sign_in':
                if($this->gladiators_controller->exist($this->gladiator)[0] == '0') {
                    $_SESSION['gladiator'] = $this->post->name;
                    $this->gladiators_controller->store($this->gladiator);

                    header('Location: ?page=arena');
                } else {
                    header('Location: ?page=sign_in');
                }
            break;
            case 'login':
                $validate = $this->gladiators_controller->login($this->gladiator);

                if($validate) {
                    $_SESSION['gladiator'] = $validate->name;

                    header('Location: ?page=arena');
                } else {
                    header('Location: ?page=sign_in');
                }
            break;
            case 'hit':
                $this->gladiator->suffer();

                $this->gladiators_controller->update($this->gladiator);

                header('Location: ?page=arena');
            break;
            case 'logout':
            break;
        }
    }
}