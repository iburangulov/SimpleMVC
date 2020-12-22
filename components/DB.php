<?php


namespace home\components;
use PDO;

class DB
{

    public static function getPDO()
    {
        $dbName = DB_NAME;
        $dbHost = DB_HOST;
        $dbUser = DB_USER;
        $dbPass = DB_PASS;

        $dsn = "mysql:host=$dbHost; dbname=$dbName";
        $pdo = new \PDO($dsn, $dbUser, $dbPass);
        return $pdo;
    }

    public static function getById($table, $id)
    {
        $query = "SELECT * FROM $table WHERE `id` = $id LIMIT 1";
        $pdo = self::getPDO();
        if ($pdo)
        {
            $result = $pdo->query($query);
            $resp = $result->fetch(PDO::FETCH_ASSOC);
            return $resp;
        } else return false;
    }

    public static function getFromTo($table, $limit, $offset)
    {
        $query = "SELECT * FROM $table LIMIT $limit OFFSET $offset";
        $pdo = self::getPDO();
        if ($pdo)
        {
            $result = $pdo->query($query);
            $resp = array();
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                $resp[] = $row;
            }
            return $resp;
        } else return false;
    }

    public static function tableCount(string $table)
    {
        $query = "SELECT COUNT(id) FROM `$table`";
        $pdo = self::getPDO();
        if ($pdo)
        {
            $request = $pdo->query($query);
            $result = $request ? $request->fetch(PDO::FETCH_NUM) : false;
            return $result[0];
        } else return false;
    }


}