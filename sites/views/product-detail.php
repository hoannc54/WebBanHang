<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/30/2015
 * Time: 3:23 PM
 */
require 'configs/config.php';
require 'libraries/connect.php';
require 'models/product.php';

//Lấy product_id từ URL
$product_id = isset($_GET['product_id']) ? ((int)$_GET['product_id']) : 0;
//Lấy thông tin sản phẩm
$product_active = GetProductById($product_id);

//Giao diện
require 'views/front/product/v_detail.php';

?>