<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 15.11.2018
 * Time: 21:06
 */

class AdminController extends AdminBase
{
    public static function actionIndex()
    {
        self::checkAdmin();
        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        require_once ROOT . '/views/admin/index.php';
        return true;
    }
}