<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/3/2015
 * Time: 9:53 PM
 */
session_start();
if(isset($_SESSION['user'])){
    header('location:../home/home.php');
}

include '../../config/Config.php';
include '../../models/User.php';
//require_once '../../libraries/Db.php';
//require_once '../../models/UserObj.php';

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Khởi tạo đối tượng thành viên
    $userModel = new User();

    //Lấy thông tin của thành viên
    $user = $userModel->getByUsername($username);

    //Kiểm tra sự tồn tại của thành viên và mật khẩu có trùng khớp không
    if($user && $user->getPassword() == $password){
        $_SESSION['user'] = $user;

        //Chuyển hướng đến trang chủ quản trị
        header('location:../home/home.php');
    }


}
require '../../views/user/v_login.php';
?>