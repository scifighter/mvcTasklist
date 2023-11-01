<?php

namespace Application\Controllers;

use \Application\Core as Core;

class UserController extends Core\Controller {

    function indexAction() {
        if (isset($_SESSION['user'])) {
            $this->view->generate('UserView.php', 'TemplateView.php');
        } else {
            header('Location:'.'Login');
        }
    }
}