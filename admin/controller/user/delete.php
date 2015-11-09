<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/18/2015
 * Time: 3:01 PM
 */
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}
//Add các file cần thiết
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';

$user_id = $_GET['user_id'];

//Xóa
DeleteUser($user_id);

//Quay về trang danh sách thành viên
header('location:list.php');
?>