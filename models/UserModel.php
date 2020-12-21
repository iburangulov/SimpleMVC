<?php


namespace home\models;


use PDO;
use home\components\DB;

class UserModel
{
    private $table;

    public function __construct()
    {
        $this->table = 'users';
    }

    public function addUser($user_name, $user_email, $user_password)
    {

        $user_password = md5($user_password);
        $pdo = DB::getPDO();
        $query =
            "INSERT INTO $this->table (`name`, `email`, `password`) VALUES ('$user_name', '$user_email', '$user_password')";
        $pdo->query($query);
    }

    public function login($user_email, $user_password)
    {
        $pdo = DB::getPDO();
        $pass = md5($user_password);
        $query = "SELECT * FROM $this->table WHERE `email` = '$user_email' AND `password` = '$pass'";
        $response = $pdo->query($query);
        $result = $response->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

}