<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 21.11.2018
 * Time: 18:28
 */

class AdminCategoryController extends AdminBase
{
    public static function actionIndex()
    {
        self::checkAdmin();
        $categoriesList = Category::getCategoriesListAdmin();

        require_once ROOT . '/views/admin_category/index.php';
        return true;
    }

    public static function actionCreate()
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if ($errors == false) {
                Category::createCategory($options);

                header("Location: /admin/category/");
            }
        }

        require_once ROOT . '/views/admin_category/create.php';
        return true;
    }

    public static function actionDelete($id)
    {
        self::checkAdmin();

        Category::deleteCategoryById($id);

        header("Location: /admin/category/");
    }

    public static function actionUpdate($id)
    {
        self::checkAdmin();

        $category = Category::getCategoryById($id);

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if ($errors == false) {
                Category::updateCategoryById($id, $options);
                header("Location: /admin/category/");
            }
        }

        require_once ROOT . '/views/admin_category/update.php';
        return true;

    }
}