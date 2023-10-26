<?php

class View {

    public bool $auth = false;

    public function __construct(bool $auth) {
        $this->auth = $auth;
    }

    static function drawPage($auth) {
        include_once 'view.html';
        if ($auth) {
            echo 'true';
        } else {
            echo 'false';
        }
    }
}