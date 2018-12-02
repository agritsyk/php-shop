<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 04.11.2018
 * Time: 14:38
 */

class User
{
    public static function register($login, $password, $email)
    {
        $db = Database::getConnection();

        $query = 'INSERT INTO user (login, password, email) '
            . 'VALUES (:login, :password, :email)';
        $result = $db->prepare($query);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function checkLogin($login)
    {
        if (strlen($login) >= 2) {
            return true;
        }

        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) >= 5) {
            return true;
        }

        return false;
    }

    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 6) {
            return true;
        }

        return false;
    }

    public static function checkEmailExists($email)
    {
        $db = Database::getConnection();

        $query = 'SELECT COUNT(*) FROM user WHERE email = :email';
        $result = $db->prepare($query);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()) {
            return true;
        }
        return false;
    }

    public static function checkUserData($email, $password)
    {
        $db = Database::getConnection();

        $query = 'SELECT * FROM user WHERE email= :email AND password= :password';
        $result = $db->prepare($query);

        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();

        if ($user) {
            return $user['id'];
        }

        return false;
    }

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login/");
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }

        return true;
    }

    public static function getUserById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Database::getConnection();

            $query = 'SELECT * FROM user WHERE id= :id';
            $result = $db->prepare($query);

            $result->bindParam(':id', $id, PDO::PARAM_STR);
            $result->execute();

            return $result->fetch();
        }
    }

    public  static function edit($id, $login, $password)
    {
        $db = Database::getConnection();

        $query = 'UPDATE user SET login = :login, password = :password WHERE id= :id';

        $result = $db->prepare($query);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_STR);

        return $result->execute();
    }


}