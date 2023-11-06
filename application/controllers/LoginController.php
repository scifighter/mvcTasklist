<?php

namespace Application\Controllers;

use \Application\Core as Core;

class LoginController extends Core\Controller {

    function indexAction() {
        if (!isset($_SESSION['user'])) {
            $this->view->generate('LoginView.php', 'TemplateView.php');
        } else {
            header('Location:'.'User');
        }
    }
}