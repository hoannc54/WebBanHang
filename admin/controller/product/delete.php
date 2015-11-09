<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/29/2015
 * Time: 4:00 PM
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

//Lấy product_id từ URL
$product_id = $_GET['product_id'];

//Xóa
DeleteProduct($product_id);

//Quay về trang danh sách sản phẩm
header('location:list.php');
?>