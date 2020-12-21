<?php


namespace home\models;


class UserModel
{
    private $table;

    public function __construct()
    {
        $this->table = 'users';
    }

    public function addUser($user_name, $user_email, $user_password)
    {
        $pdo = DB
    }

}