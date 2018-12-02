<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28.10.2018
 * Time: 18:26
 */

require_once ROOT. '/components/Database.php';

class Category
{
    public static function getCategoriesList()
    {
        $db = Database::getConnection();

        $categoriesList = array();

        $result = $db->query("SELECT id, name, status FROM category WHERE status = 1;");

        $i = 0;

        while ($row = $result->fetch()) {
            $categoriesList[$i]['id'] = $row['id'];
            $categoriesList[$i]['name'] = $row['name'];
            $categoriesList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoriesList;
    }

    public static function getCategoriesListAdmin()
    {
        $db = Database::getConnection();

        $categoriesList = array();

        $result = $db->query("SELECT id, name, status FROM category;");

        $i = 0;

        while ($row = $result->fetch()) {
            $categoriesList[$i]['id'] = $row['id'];
            $categoriesList[$i]['name'] = $row['name'];
            $categoriesList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoriesList;
    }

    public static function getCategoryById($categoryId)
    {
        $db = Database::getConnection();

        $result = $db->query("SELECT * FROM category WHERE id=" . $categoryId);

        $category = $result->fetch();

        return $category;
    }

    public static function createCategory($options)
    {
        $db = Database::getConnection();

        $query = "INSERT INTO category (name, status) VALUES (:name, :status)";

        $result = $db->prepare($query);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);

        return $result->execute();
    }

    public static function deleteCategoryById($id)
    {
        $id = intval($id);

        $db = Database::getConnection();

        $query = "DELETE FROM category WHERE id=:id";
        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->execute();
    }

    public static function updateCategoryById($id, $options)
    {
        $db = Database::getConnection();

        $query = "UPDATE category SET "
                . "name=:name, status=:status "
                . "WHERE id=:id";
        $result =$db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);

        return $result->execute();
    }
}