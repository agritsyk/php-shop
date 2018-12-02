<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.11.2018
 * Time: 20:00
 */

class AdminProductController extends AdminBase
{
    public static function actionIndex()
    {
        self::checkAdmin();

        $productList = Product::getProductsList();

        require_once ROOT . '/views/admin_product/index.php';
        return true;
    }

    public static function actionDelete($id)
    {
        self::checkAdmin();

        Product::deleteProductById($id);

        header("Location: /admin/product/");
    }

    public static function actionUpdate($id)
    {
        self::checkAdmin();
        $categories = Category::getCategoriesList();
        $product = Product::getProductById($id);

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['brand'] = $_POST['brand'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['description'] = $_POST['description'];
            $options['category_id'] = $_POST['category_id'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if ($errors == false) {
                Product::updateProductById($id, $options);

                header("Location: /admin/product/");
            }
        }

        require_once ROOT . '/views/admin_product/update.php';
        return true;
    }

    public static function actionCreate()
    {
        self::checkAdmin();
        $categories = Category::getCategoriesList();

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['brand'] = $_POST['brand'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['description'] = $_POST['description'];
            $options['category_id'] = $_POST['category_id'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if ($errors == false) {
                $id = Product::createProduct($options);

                if ($id) {
                    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                        $imagePath = $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg";
                        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
                        $image = new SimpleImage();
                        $image->load($imagePath);
                        $image->resizeToHeight(160);
                        $image->save($imagePath);
                    }
                }

                header("Location: /admin/product");
            }
        }

        require_once ROOT . '/views/admin_product/create.php';
        return true;
    }
}