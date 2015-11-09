<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/15/2015
 * Time: 3:06 PM
 */
session_start();

//Kiểm tra đăng nhập nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:login.php');
}

//Add các file cần thiết
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
//Lấy danh sách thành viên
$user_list = GetUserList();
//Trang giao diện
require '../../views/user/v_listuser.php';
?>