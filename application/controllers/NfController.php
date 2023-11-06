<?php

namespace Application\Controllers;

use \Application\Core as Core;

class NfController extends Core\Controller {

    function indexAction() {
        $this->view->generate('404View.php', 'TemplateView.php');
    }
}