<?php
/**
 * Project configuration, don't touch this file.
 *
 * For set a general stubs, go to layout's files.
 */

require '../Autoloader.php';

use App\Models\Database;

Autoloader::register();

new Database;

$route = require '../Config/routes.php';

ob_start();

require 'pages/' . $route . '.php';

$content = ob_get_clean();

require 'layouts/default.php';