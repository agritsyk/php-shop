<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 14.11.2018
 * Time: 19:31
 */

class Order
{
    public static function save($userName, $userPhone, $userComment, $userId, $productsInCart)
    {
        $db = Database::getConnection();

        $products = json_encode($productsInCart);

        $query = "INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) VALUES"
                . " (:user_name, :user_phone, :user_comment, :user_id, :products)";

        $result = $db->prepare($query);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getOrdersList()
    {
        $db = Database::getConnection();

        $query = "SELECT * FROM product_order";
        $result = $db->prepare($query);
        $result->execute();

        $ordersList = array();

        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['user_name'] = $row['user_name'];
            $ordersList[$i]['user_phone'] = $row['user_phone'];
            $ordersList[$i]['date'] = $row['date'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }

    public static function getOrderById($id)
    {
        $db = Database::getConnection();

        $query = "SELECT * FROM product_order WHERE id=:id";
        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        return $result->fetch();
    }

    public static function getStatusText($status)
    {
        switch ($status)
        {
            case '1':
                return 'New order';
                break;
            case '2':
                return 'In processing';
                break;
            case '3':
                return 'Delivering';
                break;
            case '4':
                return 'Complete';
                break;
        }
    }

    public static function deleteOrderById($id)
    {
        $db = Database::getConnection();

        $query = "DELETE FROM product_order WHERE id=:id";

        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();

    }

    public static function updateOrderById($id, $options)
    {
        $db = Database::getConnection();

        $query = "UPDATE product_order SET "
                . "user_name = :user_name, "
                . "user_phone = :user_phone, "
                . "user_comment = :user_comment, "
                . "date = :date, "
                . "status = :status "
                . "WHERE id=:id";

        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $options['user_name'], PDO::PARAM_STR);
        $result->bindParam(':user_phone', $options['user_phone'], PDO::PARAM_STR);
        $result->bindParam(':user_comment', $options['user_comment'], PDO::PARAM_STR);
        $result->bindParam(':date', $options['date'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);

        return $result->execute();
    }
}