<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 29.10.2018
 * Time: 20:13
 */

class CategoryController
{
    public static function actionView($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $category = Category::getCategoryById($categoryId);

        $productsByCategoryId = array();
        $productsByCategoryId = Product::getProductsByCategoryId($categoryId, $page);
        $productsByCategoryIdCount = count($productsByCategoryId);
        $productsByCategoryIdRowCount = ceil($productsByCategoryIdCount / 3);

        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once ROOT . '/views/category/view.php';
        return true;
    }
}