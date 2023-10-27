<?php

class Controller {
    
    static function auth() {

        $view = new View(false);

        if(LoginController::authCheck() == true) {

            $user = new UserController;
            $tasks = new TasksController;

            view::drawPage(true);

        } else {
            view::drawPage(false);
        }

    }

}
