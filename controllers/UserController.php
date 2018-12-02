<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 04.11.2018
 * Time: 14:11
 */

class UserController
{
    public static function actionRegister()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $login = '';
        $email = '';
        $password = '';
        $result = false;


        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkLogin($login)) {
                $errors[] = 'Wrong login!';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Wrong email!';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Wrong password!';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Email already registered!';
            }

            if ($errors == false) {
                $result = User::register($login, $password, $email);
            }
        }

        require_once (ROOT . '/views/user/register.php');

        return true;
    }

    public static function actionLogin()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            /*if (!User::checkEmail($email)) {
                $errors[] = 'Wrong email!';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Wrong password!';
            }*/

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Wrong data to login!';
            } else {
                User::auth($userId);
                header("Location: /account/");
            }
        }

        require_once (ROOT . '/views/user/login.php');
        return true;
    }

    public static function actionLogout()
    {
        unset($_SESSION['user']);
        header("Location: /");
    }


}