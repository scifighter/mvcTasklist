<?php


class loginController extends controller {

    static function authCheck() {
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }
}