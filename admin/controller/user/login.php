<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/15/2015
 * Time: 12:43 AM
 */
//Khởi động sesion
session_start();
//Kiem tra neu da dang nhap thi quay ve trang chu
if(isset($_SESSION['user'])){
    header('location:../../index.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';

//Kiem tra du lieu POST len
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
    //Lay username va password tu form vao 2 bien
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Lay thong tin user tu database
    $user = GetUserByUsername($username);
    //Kiem tra su ton tai cua user va mat khau co khop khong
    if($user && $user['password'] == $password){
        //Tao session lu thong tin thanh vien dang nhap
        $_SESSION['user'] = $user;
        //Chuyen huong ve trang chu quan tri
        header('location: ../../index.php?user_id='.$user['user_id']);
    }
    else{
        $error = TRUE; // Bat co loi
    }

}
require '../../views/user/v_login.php';
?>