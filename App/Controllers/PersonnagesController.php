<?php

namespace App\Controllers;

use App\Models\Database;
use App\Interfaces\CrudInterface;


class PersonnagesController implements CrudInterface
{
    public function __construct(Database $db)
    {
        $this->db = $db;
        $this->db->boot('personnages_table');
    }

    public function index()
    {
        return $this->db->index();
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function store($request)
    {
        $this->db->store($request);

        header('Location: ?page=arena');
    }

    public function edit()
    {

    }

    public function update($request)
    {

    }

    public function destroy()
    {

    } 
}

