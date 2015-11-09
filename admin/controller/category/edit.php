<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/28/2015
 * Time: 6:51 PM
 * Trang chỉnh sửa danh mục sản phẩm
 */
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
//Lấy category_id từ URL
$category_id = $_GET['category_id'];
//Nếu có POST dữ liệu lên thì xử lý cập nhật
if($_POST) {
//Nhận dữ liệu từ form và gán vào một mãng
    $data = array(
        'name' => $_POST['name'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'modified' => date('Y-m-d H:i:s')
    );
    if(EditCategory($data, $category_id)){
//Tạo session để lưu cờ thông báo thành công
        $_SESSION['success'] = true;

//Tải lại trang (Mục đích là để tải lại thông tin mới)
       // header('location:edit.php?category_id='. $category_id);
    }
}
//Lấy thông tin danh mục sản phẩm để trình bày trên form
$category = GetCategoryById($category_id);

//Giao diện
require '../../views/category/v_edit.php';