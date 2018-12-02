<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28.10.2018
 * Time: 12:14
 */

class ProductController
{
    public function actionView($id)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productItem = Product::getProductById($id);

        require_once ROOT . '/views/product/view.php';

        return true;
    }
}