<?php
/**
 * Project configuration, don't touch this file.
 *
 * For set a general stubs, go to layout's files.
 */

require '../Autoloader.php';

use Config\Routes;
use App\Models\Database;

Autoloader::register();

new Database;

ob_start();

new Routes;

$content = ob_get_clean();

require 'layouts/default.php';