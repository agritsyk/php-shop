<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28.10.2018
 * Time: 10:42
 */

return array(
    'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController

    'admin' => 'admin/index', //actionIndex in AdminController

    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax in CartController
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd in CartController
    'cart/checkout' => 'cart/checkout', // actionCheckout in CartController
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete in CartController
    'cart' => 'cart/index', // actionIndex in CartController

    'category/([0-9]+)/page-([0-9]+)' => 'category/view/$1/$2', // actionView in CategoryController
    'category/([0-9]+)' => 'category/view/$1', //actionView in CategoryController

    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1', // actionView in AdminOrderController
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1', // actionUpdate in AdminOrderController
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1', // actionDelete in AdminOrderController
    'admin/order' => 'adminOrder/index', // actionIndex in AdminOrderController

    'admin/category/create' => 'adminCategory/create', // actionCreate in AdminCategoryController
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1', // actionUpdate in AdminCategoryController
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1', // actionDelete in AdminCategoryController
    'admin/category' => 'adminCategory/index', // actionIndex in AdminCategoryController

    'admin/product/create' => 'adminProduct/create', // actionCreate in AdminProductController
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1', // actionUpdate in AdminProductController
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1', // actionDelete in AdminProductController
    'admin/product' => 'adminProduct/index', // actionIndex in AdminProductController

    'user/register' => 'user/register', // actionRegister in UserController
    'user/login' => 'user/login', // actionLogin in UserController
    'user/logout' => 'user/logout', //actionLogout in UserController

    'account/edit' => 'account/edit', //actionEdit in AccountController
    'account' => 'account/index', // actionIndex in AccountController

    'services' => 'site/services', // actionServices in SiteController
    'sale' => 'site/sale', // actionSale in SiteController
    'contact' => 'site/contact', //actionContact in SiteController
    '' => 'site/index', // actionIndex in SiteController
);