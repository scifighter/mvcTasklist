<?php

class Router {
	static function start() {

		$controller_name = 'Main';
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


		$model_file = $model_name.'.php';
		$model_path = "application/models/".$model_file;
		
        if(file_exists($model_path)) {
			include "application/models/".$model_file;
		}

		$controller_file = $controller_name.'.php';
		$controller_path = "application/controllers/".$controller_file;

		if(file_exists($controller_path)) {
			include "application/controllers/".$controller_file;
		}
		else {
			//Router::ErrorPage404();
		}
		
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action)) {
			$controller->$action();
		}
		else {
			//Router::ErrorPage404();
            //debug($controller);
            debug($action);
		}
	
	}
	
	static function ErrorPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}