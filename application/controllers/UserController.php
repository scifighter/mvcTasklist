<?php

class UserController extends Controller {

    function indexAction() {
        if (isset($_SESSION['user'])) {
            $this->view->generate('UserView.php', 'TemplateView.php');
        } else {
            header('Location:'.'Login');
        }
    }
}