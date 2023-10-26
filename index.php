<?php


require_once 'application/lib/dev.php';
require_once 'application/core/controller.php';

$controller = new controller;

controller::auth();
?>