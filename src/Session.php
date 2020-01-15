<?php

class Session {
    public static function isAuth() {
        return array_key_exists('is_auth', $_SESSION) && $_SESSION['is_auth'] === true;
    }

    public static function authorize() {
        $_SESSION['is_auth'] = true;
    }

    public static function destroy() {
        unset($_SESSION['is_auth']);
    }
}