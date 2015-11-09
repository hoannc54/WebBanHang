<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/29/2015
 * Time: 1:20 PM
 * Trang thêm mới sản phẩm
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
$productModel = new Product();
//Xử lý POST dữ liệu lên
if($_POST){
    //Upload hình ảnh
    $image = $_FILES['image']['name'];
    if($image != NULL){
        move_uploaded_file($_FILES['image']['tmp_name'],'../../../upload/product'.'/'.trim($_POST['category_id']).'/'.$image);
    }
    else{
        $image = null;
    }
    //Nhận dữ liệu từ form gán vào mảng
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
    //Truy vấn thêm mới vào cơ sở dữ liệu
    if($productModel->add($data)){
        header('location:list.php');
    }
    else{
        echo "Thêm mới không thành công";
    }
}

//Lấy danh sách danh mục sản phẩm có trạng thái kích hoạt (Status = 1)
$categoryModel = new Category();
$category_active_list = $categoryModel->getActiveList();
//Require file giao diện (View)
require '../../views/product/v_add.php';
?>