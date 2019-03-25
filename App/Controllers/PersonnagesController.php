<?php

namespace App\Controllers;

use App\Interfaces\CrudInterface;
use App\Models\Database;


class PersonnagesController extends Database implements CrudInterface
{
    public function __construct()
    {
        Database::boot('personnages_table');
    }

    public function index()
    {
        return Database::index(null);
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function store($request)
    {
        Database::builder('store', self::TABLENAME);
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

