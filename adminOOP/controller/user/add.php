<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/4/2015
 * Time: 7:44 PM
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

//Nếu có POST dữ liệu lên thì xử lý
if($_POST) {
//Nhận dữ liệu từ form và gán vào một mãng (Có thể sử dụng UserObj để lưu dữ liệu)
    $data = array(
        'username' => $_POST['username'],
        'password' => md5($_POST['password']),
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );
    $userModel = new User();
    if($userModel->addUser($data)){
        $_SESSION['success'] = true;
        header('location:list.php');
    }
    //Ngừng thực thi
    exit();

}

require '../../views/user/v_add.php';
?>