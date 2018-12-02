<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28.10.2018
 * Time: 10:43
 */


class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts();
        $latestProductsCount = count($latestProducts);
        $latestProductsRowCount = ceil($latestProductsCount / 3);

        require_once ROOT . '/views/site/index.php';

        return true;
    }

    public function actionContact()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $userEmail = '';
        $userName = '';
        $userMsg = '';

        $result = false;

        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userEmail = $_POST['userEmail'];
            $userMsg = $_POST['userMsg'];

            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Please, enter correct Email!';
            }

            if ($errors == false) {
                $adminEmail = 'ikon133@gmail.com';
                $message = "Text: {$userMsg}. From {$userName}";
                $subject = "Contact Form Message from {$userEmail}";
                $result = mail($adminEmail, $subject, $message);

                $result = true;
            }
        }

        require_once ROOT . '/views/site/contact.php';

        return true;
    }

    public static function actionSale()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        require_once ROOT . '/views/site/sale.php';
        return true;
    }

    public static function actionServices()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        require_once ROOT . '/views/site/services.php';
        return true;
    }
}