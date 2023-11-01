<?php

namespace Application\Core;

use Application\Controllers\UserController;

class Router {
	static function start() {

		$controller_name = 'Login';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		if ( !empty($routes[1]) ) {	
			$controller_name = $routes[1];
		}
		
		if ( !empty($routes[2]) ) {
			$action_name = $routes[2];
		}


		$model_name = $controller_name.'Model';
		$controller_name = $controller_name.'Controller';
		$action_name = $action_name.'Action';

		$controller = new UserController();
		$action = $action_name;
		
		if(method_exists($controller, $action)) {
			$controller->$action();
		}
		else {
			Router::ErrorPage404();

		}
	
	}
	
	static function ErrorPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}