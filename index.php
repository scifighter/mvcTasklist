<?php

require_once 'application/lib/dev.php';
require_once 'application/config/autoloaderDirectories.php';
require_once 'application/lib/Autoloader.php';

$controller = new Controller;

controller::auth();

?>