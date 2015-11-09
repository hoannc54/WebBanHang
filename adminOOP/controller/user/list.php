<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/4/2015
 * Time: 7:00 PM
 */
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
include '../../config/Config.php';
include '../../models/User.php';

//Khởi tạo đối tượng thành viên
$userModel = new User();

//
$userList = $userModel->getListUser();

$title = "Danh sách-Thành viên";

require '../../views/user/v_listuser.php';