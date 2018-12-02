<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28.10.2018
 * Time: 22:32
 */
//require_once ROOT . '/components/Database.php';

class Product
{
    const SHOW_BY_DEFAULT = 3;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Database::getConnection();

        $latestProducts = array();

        $query = "SELECT id, name, price FROM product WHERE status='1' ORDER BY id DESC LIMIT " . $count;
        $result = $db->query($query);

        $i = 0;

        while ($row = $result->fetch()) {
            $latestProducts[$i]['id'] = $row['id'];
            $latestProducts[$i]['name'] = $row['name'];
            $latestProducts[$i]['price'] = $row['price'];
            $i++;
        }

        return $latestProducts;

    }

    public static function getProductsByCategoryId($categoryId, $page = 1)
    {
        $categoryId = intval($categoryId);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        $db = Database::getConnection();

        $productsByCategoryId = array();

        $query = "SELECT id, name, price FROM product WHERE category_id = " . $categoryId . " LIMIT "
            . self::SHOW_BY_DEFAULT . " OFFSET " . $offset;


        $result = $db->query($query);

        $i = 0;

        while ($row = $result->fetch()) {
            $productsByCategoryId[$i]['id'] = $row['id'];
            $productsByCategoryId[$i]['name'] = $row['name'];
            $productsByCategoryId[$i]['price'] = $row['price'];
            $i++;
        }

        return $productsByCategoryId;
    }

    public static function getProductById($productId)
    {
        $productId = intval($productId);

        $db = Database::getConnection();

        $query = "SELECT id, name, code, brand, price, description, category_id, status FROM product WHERE id = " . $productId;
        $result = $db->query($query);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $productItem = $result->fetch();

        return $productItem;
    }

    public static function getProductsByIds($idsArray)
    {
        $products = array();

        $db = Database::getConnection();
        // Подготавливаем плейсхолдер вида "?, ?, ?, ... , ?" по количеству элементов массива $idsArray
        $arrayPlaceholder = str_repeat('?,', count($idsArray) - 1) . '?';

        $query = "SELECT * FROM product WHERE id IN ($arrayPlaceholder)";
        $result = $db->prepare($query);
        $result->execute($idsArray);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['code'] = $row['code'];
            $i++;
        }

        return $products;
    }

    public static function getProductsList()
    {
        $productList = array();

        $db = Database::getConnection();

        $query = "SELECT * FROM product";
        $result = $db->prepare($query);

        $result->execute();

        $i = 0;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['code'] = $row['code'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $i++;
        }

        return $productList;
    }

    public static function createProduct($options)
    {
        $db = Database::getConnection();

        $query = "INSERT INTO product "
                . "(name, category_id, price, code, "
                . "description, status, brand) "
                . " VALUES "
                . "(:name, :category_id, :price, :code, "
                . ":description, :status, :brand)";

        $result = $db->prepare($query);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);

        if ($result->execute()) {
            return $db->lastInsertId();
        }

        return 0;
    }

    public static function updateProductById($id, $options)
    {
        $id = intval($id);

        $db = Database::getConnection();

        $query = "UPDATE product SET "
                . "name = :name, "
                . "category_id = :category_id, "
                . "price = :price, "
                . "code = :code, "
                . "description = :description, "
                . "status = :status, "
                . "brand = :brand "
                . "WHERE id=:id";

        $result = $db->prepare($query);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_INT);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

    public static function deleteProductById($id)
    {
        $id = intval($id);

        $db = Database::getConnection();

        $query = "DELETE FROM product WHERE id=:id";

        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

    }

    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Database::getConnection();

        $query = "SELECT count(id) AS count FROM product WHERE category_id=:category_id";
        $result = $db->prepare($query);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row = $result->fetch();

        return $row['count'];
    }

    public static function getImage($id)
    {
        $noImage = 'no-image.jpg';

        $path = '/upload/images/products/';

        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage)) {
            return $pathToProductImage;
        }

        return $path . $noImage;
    }
}