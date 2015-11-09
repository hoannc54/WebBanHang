<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/28/2015
 * Time: 12:50 AM
 * Thêm mới danh mục sản phẩm.
 */
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}
require '../../config/Config.php';
require '../../models/Category.php';


date_default_timezone_set('Asia/Ho_Chi_Minh');
if($_POST){
    $data = array(
        'name'=>$_POST['name'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );

    $categoryModel = new Category();

    //Thêm mới
    if($categoryModel->add($data)){
//Tạo session để lưu cờ thông báo thành công
        $_SESSION['success'] = true;

//Tải lại trang (Mục đích là để reset form)
        header('location:list.php');

//Ngừng thực thi
        exit();
    }
    else
        echo "That bai";
}
require '../../views/category/v_add.php';
?>