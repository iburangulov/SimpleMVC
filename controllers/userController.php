<?php


class userController
{
    private $model;

    public function __construct()
    {

    }

    public function signin()
    {

    }

    public function signup()
    {
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];
        $user_password_confirmation = $_POST['password_confirmation'];



    }

    public function signout()
    {
        header('Location: / ');
    }
}