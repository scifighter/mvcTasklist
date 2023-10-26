<?php


class LoginController extends Controller {

    static function authCheck() {
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }
}