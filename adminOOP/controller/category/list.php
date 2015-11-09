<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/27/2015
 * Time: 11:36 PM
 * *Trang danh mục sản phẩm
 */
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}
require '../../config/Config.php';
require '../../models/Category.php';

//Lấy danh mục sản phẩm
$categoryModel = new Category();
$categoryList = $categoryModel->getList();


// Require giao diện
require '../../views/category/v_list.php'
?>