<?php 

use App\Controllers\GladiatorsController;

$combattants = new GladiatorsController('gladiators_table');

var_dump($combattants->index());