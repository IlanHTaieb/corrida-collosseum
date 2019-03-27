<?php

namespace App\Controllers;

use App\Models\Gladiator;


class GladiatorsController extends Controller
{
    public function index()
    {
        return $this->database->index();
    }

    public function exist($name)
    {
        return $this->database->count($name);
    }

    public function store(Gladiator $request)
    {
        $this->database->store($request);

        header('Location: ?page=arena');
    }

    public function login(Gladiator $request)
    {
        return $this->database->show($request);
    }

    public function update(Gladiator $gladiator)
    {
        $this->database->update($gladiator);
    }

    public function destroy()
    {

    } 
}

