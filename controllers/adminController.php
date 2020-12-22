<?php


class adminController
{

    public function __construct()
    {
        if ($_SESSION['user']['type'] !== 'admin')
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