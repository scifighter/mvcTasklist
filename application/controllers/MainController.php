<?php

class MainController extends Controller {
    function indexAction() {
        $this->view->generate('MainView.php', 'TemplateView.php');
    }
}