<?php

namespace App\Models;

class Personnages
{
    private $power;
    private $location;
    private $experience;
    private $heal;

    public function index()
    {
        return Database::builder('index', 'test');
    }
}