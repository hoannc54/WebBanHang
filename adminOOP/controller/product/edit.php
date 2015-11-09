<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/29/2015
 * Time: 3:57 PM
 */
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

//Require các file cần thiết
require '../../config/Config.php';
require '../../models/Category.php';
require '../../models/Product.php';


date_default_timezone_set('Asia/Ho_Chi_Minh');
$product_id = $_GET['product_id'];
//Xử lý dữ liệu gửi lên
$productModel = new Product();
if($_POST){
    $image = $_FILES['image']['name'];
    if($image != NULL){
        move_uploaded_file($_FILES['image']['tmp_name'],'../../../upload/product'.'/'.trim($_POST['category_id']).'/'.$image);
    }
    else{
        $image = null;
    }
    //Gán dữ liệu nhận được vào mảng
    $data = array(
        'category_id' => $_POST['category_id'],
        'name' => $_POST['name'],
        'detail' => $_POST['detail'],
        'image' => $image,
        'price' => $_POST['price'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );

    //Cập nhật vào cơ sở dữ liệu
    if($productModel->edit($data,$product_id)){
        header('location:list.php');
    }
}

//Lấy thông tin sản phẩm để hiển thị lên form
$product = $productModel->getProductById($product_id);
//Lấy danh sách danh mục sản phẩm có trạng thái kích hoạt (Status = 1)

$categoryModel = new Category();
//Lấy danh sách danh mục sản phẩm có trạng thái kích hoạt (Status = 1)
$category_active_list = $categoryModel->getActiveList();
//Giao diện
require '../../views/product/v_edit.php';
