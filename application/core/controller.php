<?php

require_once 'application/controllers/TaskController.php';
require_once 'application/controllers/UserController.php';
require_once 'application/controllers/LoginController.php';

require_once 'application/views/layouts/default.php';

class Controller {
    
    static function auth() {

        $view = new view(false);

        if(LoginController::authCheck() == true) {

            $user = new UserController;
            $tasks = new TasksController;

            view::drawPage(true);

        } else {

            view::drawPage(false);
        }

    }

}
