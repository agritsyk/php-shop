<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 04.11.2018
 * Time: 17:47
 */

class AccountController
{
    public static function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        require_once ROOT . '/views/account/index.php';

        return true;
    }

    public static function actionEdit()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        $login = $user['login'];
        $password = $user['password'];

        $result = false;

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkLogin($login)) {
                $errors[] = 'Wrong login!';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Wrong password!';
            }

            if ($errors == false) {
                $result = User::edit($userId, $login, $password);
            }
        }

        require_once ROOT . '/views/account/edit.php';

        return true;
    }
}