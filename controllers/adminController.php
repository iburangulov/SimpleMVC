<?php


use home\Middlewares\Auth;

class adminController
{

    public function __construct()
    {
        if (!Auth::isType('admin'))
        {
            header('Location: / ');
        }
    }

    public function home()
    {
        $title = 'Admin panel';
        include_once VIEWS_PATH . 'admin/home.php';
    }

}