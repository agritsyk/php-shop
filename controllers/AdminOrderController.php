<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 24.11.2018
 * Time: 18:13
 */

class AdminOrderController extends AdminBase
{
    public static function actionIndex()
    {
        self::checkAdmin();
        $ordersList = Order::getOrdersList();

        require_once ROOT . '/views/admin_order/index.php';
        return true;
    }

    public static function actionDelete($id)
    {
        self::checkAdmin();

        Order::deleteOrderById($id);

        header("Location: /admin/order/");
    }

    public static function actionUpdate($id)
    {
        self::checkAdmin();

        $order = Order::getOrderById($id);
        $productsQuantity = json_decode($order['products'], true);
        $productsIds = array_keys($productsQuantity);
        $products = Product::getProductsByIds($productsIds);

        if (isset($_POST['submit'])) {
            $options['user_name'] = $_POST['userName'];
            $options['user_phone'] = $_POST['userPhone'];
            $options['user_comment'] = $_POST['userComment'];
            $options['date'] = $_POST['date'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if ($errors == false) {
                Order::updateOrderById($id, $options);

                header("Location: /admin/order/");
            }
        }

        require_once ROOT . '/views/admin_order/update.php';
        return true;
    }

    public static function actionView($id)
    {
        self::checkAdmin();
        $order = Order::getOrderById($id);

        $productsQuantity = json_decode($order['products'], true);

        $productsIds = array_keys($productsQuantity);

        $products = Product::getProductsByIds($productsIds);

        require_once ROOT . '/views/admin_order/view.php';
        return true;
    }
}