<?php


namespace home\Middlewares;


use home\components\DB;

class Auth
{
    public static function check()
    {
        if (isset($_SESSION['user']['id']) and isset($_SESSION['user']['email']) and
            isset($_SESSION['user']['type']) and isset($_SESSION['auth']) and $_SESSION['auth']) {
            $user = DB::getById(USERS_TABLE_NAME, $_SESSION['user']['id']);
            if ($user AND $user['id'] == $_SESSION['user']['id'] and $user['email'] == $_SESSION['user']['email'])
            {
                return true;
            } else return false;
        } else return false;
    }

    public static function isType(string $type)
    {
        if (self::check() and $_SESSION['user']['type'] === $type) {
            return true;
        } else return false;
    }

    public static function isAdmin()
    {
        return self::isType('admin');
    }

}