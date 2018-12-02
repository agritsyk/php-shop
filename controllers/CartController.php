<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 08.11.2018
 * Time: 21:47
 */

class CartController
{
    public static function actionAdd($id)
    {
        Cart::addToCart($id);

        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    }

    public static function actionAddAjax($id)
    {
        echo Cart::addToCart($id);
        return true;
    }

    public static function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        $productsInCart = Cart::getProducts();



        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);

            $totalPrice = Cart::sumInCart();
        }

        require_once ROOT . '/views/cart/index.php';
        return true;
    }

    public static function actionCheckout()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = Cart::getProducts();

        if ($productsInCart == false) {
            header("Location: /");
        }

        $totalPrice = Cart::sumInCart();
        $totalQuantity = Cart::countItems();

        $userName = false;
        $userPhone = false;
        $userComment = false;

        $result = false;

        if (!User::isGuest()) {
            $userId = User::checkLogged();
            $user = User::getUserById($userId);
            $userName = $user['login'];
        } else {
            $userId = false;
        }

        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            $errors = false;

            if (!User::checkLogin($userName)) {
                $errors[] = 'Wrong name!';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Wrong phone!';
            }

            if ($errors == false) {
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {
                    $adminEmail = 'ikon133@gmail.com';
                    $message = '<a href=http://shop/admin/orders/">Order List</a>';
                    $subject = 'New order!';
                    mail($adminEmail, $subject, $message);

                    Cart::clear();
                }
            }
        }

        require_once ROOT . '/views/cart/checkout.php';
        return true;
    }

    public static function actionDelete($id)
    {
        Cart::deleteFromCart($id);

        header("Location: /cart/");
    }
}