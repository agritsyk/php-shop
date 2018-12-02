<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 08.11.2018
 * Time: 21:47
 */

class Cart
{
    public static function addToCart($id)
    {
        $id = intval($id);

        $productsInCart = array();

        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;

        return self::sumInCart();
    }

    public static function deleteFromCart($id)
    {
        if (isset($_SESSION['products'])) {
            $productsInCart = self::getProducts();
            if (array_key_exists($id, $productsInCart) && $productsInCart[$id] !=1) {
                $productsInCart[$id]--;
            } else {
                unset($productsInCart[$id]);
            }
            $_SESSION['products'] = $productsInCart;
        }
    }

    public static function countItems()
    {
        if(isset($_SESSION['products'])) {

            $count = 0;

            foreach ($_SESSION['products'] as $productId => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getPriceById($id)
    {
        $db = Database::getConnection();

        $query = "SELECT price FROM product WHERE id= :id";
        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch()['price'];
    }

    public static function sumInCart()
    {
        if (isset($_SESSION['products'])) {
            $sum = 0;
            foreach ($_SESSION['products'] as $productId => $quantity) {
                $sum = $sum + self::getPriceById($productId) * $quantity;
            }
        } else {
            return 0;
        }
        return $sum;
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }

        return false;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }
}