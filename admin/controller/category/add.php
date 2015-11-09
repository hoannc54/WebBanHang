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

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
if($_POST){
    $data = array(
        'name'=>$_POST['name'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );
    if(AddCategory($data)){
        $_SESSION['success'] = true;
        //header('location:add.php');
    }
}
require '../../views/category/v_add.php';
?>