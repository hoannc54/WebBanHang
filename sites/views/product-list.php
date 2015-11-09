<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/30/2015
 * Time: 2:31 PM
 */
//Require các file cần thiết
require 'configs/config.php';
require 'libraries/connect.php';
require 'models/product.php';

//Lấy category_id từ URL
if($_GET){
    $category_id = isset($_GET['category_id'])?((int)$_GET['category_id']):null;

}

//Lấy danh sách sản phẩm trong danh mục được chọn
$product_active_list = GetProductActiveList($category_id);

//Giao diện
require 'views/front/product/v_list.php';

?>