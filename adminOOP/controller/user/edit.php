<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/4/2015
 * Time: 8:04 PM
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

if($_POST) {
//Nhận dữ liệu từ form và gán vào một mãng
    $data = array(
        'username' => $_POST['username'],
        'password' => empty($_POST['password']) ? null : md5($_POST['password']),
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'modified' => date('Y-m-d H:i:s')
    );
    //Cập nhật
    if($userModel->editUser($data, $user_id)){
//Tạo session để lưu cờ thông báo thành công
        $_SESSION['success'] = true;

//Tải lại trang (Mục đích là để tải lại thông tin mới)
        //header('location:edit.php?user_id=' . $user_id);

//Ngừng thực thi
        exit();
    }

}
$user = $userModel->getUserById($user_id);
require '../../views/user/v_edit.php';
?>