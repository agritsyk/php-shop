<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 04.11.2018
 * Time: 14:06
 */

function myAutoLoader($className)
{
    $array_path = array(
        '/models/',
        '/components/'
    );

    foreach ($array_path as $path) {
        $path = ROOT . $path . $className . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}