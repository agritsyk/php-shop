<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28.10.2018
 * Time: 18:26
 */

class Database
{
    public static function getConnection()
    {
        $dbParamsPath = ROOT . '/config/db_params.php';
        $dbParams = include ($dbParamsPath);

        $dsn = "mysql:host={$dbParams['host']}; dbname={$dbParams['dbname']}";
        $db = new PDO($dsn, $dbParams['user'], $dbParams['password']);
        $db->exec("set names utf8");

        return $db;
    }
}