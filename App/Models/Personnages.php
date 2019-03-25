<?php

namespace App\Models;

class Personnages
{
    protected $power;
    protected $name;

    public function power() {return $this->power;}

    public function name() {return $this->name;}
}