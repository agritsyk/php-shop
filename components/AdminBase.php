<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 15.11.2018
 * Time: 22:17
 */

abstract class AdminBase
{
    public static function checkAdmin()
    {
        if (User::checkLogged()) {
            $user = User::getUserById($_SESSION['user']);
            if ($user['admin'] == 1) {
                return true;
            } else {
                die('Access denied!');
            }
        }
    }
}