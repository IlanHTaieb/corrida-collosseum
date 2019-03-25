<?php
/**
 * Project configuration, don't touch this file.
 *
 * For set a general stubs, go to layout's files.
 */

require '../Autoloader.php';

use App\Models\Database;
use App\Models\Config as AppConfig;

Autoloader::register();

new Database;

ob_start();

new AppConfig;


$content = ob_get_clean();

require 'layouts/default.php';