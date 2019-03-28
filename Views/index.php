<?php
/**
 * Project configuration, don't touch this file.
 *
 * For set a general stubs, go to layout's files.
 */

session_start();

require '../Autoloader.php';

use Middlewares\Middlewares as AppMiddlewares;

Autoloader::register();

ob_start();

$middlewares = new AppMiddlewares();

$page = $middlewares->loadStylesheet();

$content = ob_get_clean();

require 'layouts/default.php';