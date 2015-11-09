<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/5/2015
 * Time: 1:12 PM
 */

//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:login.php');
}

//Require các file cần thiết
require '../../config/Config.php';
require '../../models/User.php';
//Lấy user_id từ URL
$user_id = $_GET['user_id'];

//Khởi tạo đối tượng thành viên (User)
$userModel = new User();

//Xóa
$userModel->deleteUser($user_id);

//Quay về trang danh sách thành viên
header('location:list.php');
?>