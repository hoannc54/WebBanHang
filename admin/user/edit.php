<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/17/2015
 * Time: 11:49 PM
 Trang chỉnh sửa thành viên.
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

if($_POST){
    $data = array(
        'username' => $_POST['username'],
        'password' => empty($_POST['password']) ? null: $_POST['password'],
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'modified' => date('Y-m-d H:i:s')
    );
    if(EditUser($data,$user_id)==1){
        echo "thanh cong";
        $_SESSION['success'] = true;
        //làm mới lại trang

        header('location:edit.php?user_id='.$user_id);
    }
    else
        echo "Cap nhat khong thanh cong";
}

$user = GetUserById($user_id);
require '../../views/admin/user/v_edit.php';
?>