<?php

require_once 'application/controllers/tasks.php';
require_once 'application/controllers/user.php';
require_once 'application/controllers/login.php';

require_once 'application/views/layouts/default.php';

class controller {
    static function auth() {

        $view = new view(false);

        if(loginController::authCheck() == true) {

            $user = new userController;
            $tasks = new tasksController;

            view::drawPage(true);

        } else {

            view::drawPage(false);
        }

    }

}
