<?php

namespace App\Controllers;

use App\Models\Database;


class Controller
{
    protected $database;

    protected $tablename;

    public function __construct(string $tablename)
    {
        $this->database = new Database;
        $this->database->boot($tablename);
    }
}