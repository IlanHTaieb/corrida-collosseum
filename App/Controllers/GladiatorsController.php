<?php

namespace App\Controllers;

use App\Models\Gladiator;
use App\Models\Database;


class GladiatorsController extends Controller
{
    public function index()
    {
        return $this->database->index();
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function store(Gladiator $request)
    {
        $this->database->store($request);

        header('Location: ?page=arena');
    }

    public function edit()
    {

    }

    public function update(Gladiator $request)
    {

    }

    public function destroy()
    {

    } 
}

