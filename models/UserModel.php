<?php
namespace home\models;

use PDO;
use home\components\DB;

class UserModel extends Model
{
    public function addUser($user_name, $user_email, $user_password)
    {
        $user_password = md5($user_password);
        $pdo = DB::getPDO();
        if ($pdo)
        {
            $query = "INSERT INTO $this->table (`name`, `email`, `password`) 
                        VALUES ('$user_name', '$user_email', '$user_password')";
            $responce = $pdo->query($query);
            return $responce;
        } else return false;

    }

    public function attempt($user_email, $user_password)
    {
        $pdo = DB::getPDO();
        if ($pdo)
        {
            $pass = md5($user_password);
            $query = "SELECT * FROM $this->table WHERE `email` = '$user_email' AND `password` = '$pass'";
            $response = $pdo->query($query);
            $temp = ($response) ? $response : false;
            $result = ($temp) ? $response->fetch(PDO::FETCH_ASSOC) : false;
            return $result;
        } else return false;
    }

}