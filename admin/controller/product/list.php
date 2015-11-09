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
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/product.php';

$product_list = GetProductList();

//Giao diện
require '../../views/product/v_list.php';