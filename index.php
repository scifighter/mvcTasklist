<?php

require_once 'application/lib/dev.php';
require_once 'application/config/autoloaderDirectories.php';
require_once 'application/lib/Autoloader.php';

$_SESSION['user']['id'] = 0;
$_SESSION['user']['name'] = 'admin';
Router::start();

?>