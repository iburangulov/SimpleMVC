<?php


use home\middlewares\Auth;

class adminController
{

    public function __construct()
    {
        if (!Auth::isType('admin'))
        {
            Auth::error('Access denied!');
            die();
        }
    }

    public function home()
    {
        $title = 'Admin panel';
        include_once VIEWS_PATH . 'admin/home.php';
    }

}