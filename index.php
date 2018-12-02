<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28.10.2018
 * Time: 10:46
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/Autoload.php');
spl_autoload_register('myAutoLoader');


$router = new Router();
$router->run();