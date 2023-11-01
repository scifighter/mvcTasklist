<?php
namespace Application\Controllers;
class LoginController extends Controller {

    function indexAction() {
        if (isset($_SESSION['user'])) {
            header('Location:'.'User');
        } else {
            $this->view->generate('MainView.php', 'TemplateView.php');
        }
    }
}