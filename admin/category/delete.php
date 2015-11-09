<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/28/2015
 * Time: 7:18 PM
 */
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';

//Lấy category_id từ URL
$category_id = $_GET['category_id'];

//Xóa
DeleteCategory($category_id);

//Quay về trang danh sách danh mục sản phẩm
header('location:list.php');
?>