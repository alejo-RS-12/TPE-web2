<?php

class Helper {

    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($user) {
        Helper::init();
        $_SESSION['USER_ID'] = $user->id;
        $_SESSION['USER_NAME'] = $user->usuario; 
    }

    
    public static function verify() {
        Helper::init();
        if (!isset($_SESSION['USER_ID'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
        }
    }
    public static function logout() {
        Helper::init();
        session_destroy();
    }
}