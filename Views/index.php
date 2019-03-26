<?php
/**
 * Project configuration, don't touch this file.
 *
 * For set a general stubs, go to layout's files.
 */

require '../Autoloader.php';

use Config\Config as AppConfig;

Autoloader::register();

ob_start();

$config = new AppConfig();

$page = $config->loadStylesheet();

$content = ob_get_clean();

require 'layouts/default.php';