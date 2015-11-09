<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/29/2015
 * Time: 1:17 PM
 */
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

//Require các file cần thiết
require '../../config/Config.php';
require '../../models/Product.php';

$productModel = new Product();

$productList = $productModel->getList();

//Giao diện
require '../../views/product/v_list.php';