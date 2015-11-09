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
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';
require '../../models/product.php';

$product_id = $_GET['product_id'];
//Xử lý dữ liệu gửi lên

if($_POST){
    $image = $_FILES['image']['name'];
    if($image != NULL){
        move_uploaded_file($_FILES['image']['tmp_name'], '../../userfile/'.$image);
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
    if(EditProduct($data,$product_id)){
        echo "cập nhật thành công";
    }
}

//Lấy thông tin sản phẩm để hiển thị lên form
$product = GetProductById($product_id);
//Lấy danh sách danh mục sản phẩm có trạng thái kích hoạt (Status = 1)
$category_active_list = GetCategoryActiveList();
//Giao diện
require '../../views/admin/product/v_edit.php';
