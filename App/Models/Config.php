<?php

namespace App\Models;

use Config\Routes;
use Config\Api;


class Config
{
    public function __construct()
    {
        new Routes;
        new Api;
    }
}