<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/29/2015
 * Time: 1:18 PM
 */
//Hàm cho list.php
function GetProductList(){
    //SQL
    $sql = "SELECT * FROM product ORDER BY product_id DESC";

//Query và return
    return mysql_query($sql);
}
//Hàm cho chức năng add.php
//Lấy danh sách danh mục sản phẩm
function GetCategoryActiveList(){
    //SQL
    $sql = "SELECT * FROM category WHERE status = 1 ORDER BY category_id ASC";
    return mysql_query($sql);
}
function AddProduct($data){
    //SQL
    $sql = "INSERT INTO product(category_id, name, detail, image, price, status, created, modified)
VALUES ({$data['category_id']}, '{$data['name']}', '{$data['detail']}', '{$data['image']}', {$data['price']}, {$data['status']}, '{$data['created']}', '{$data['modified']}')";
    echo $data['category_id'];
    echo $data['name'];
    echo $data['detail'];
    echo $data['image'];
    echo $data['price'];
    echo $data['status'];
    echo $data['created'];
    echo $data['modified'];
//Query và return
    return mysql_query($sql);
}

//--------------Hàm cho chức năng edit.php----------------
function EditProduct($data, $product_id){
    //SQL
    $sql = "UPDATE product SET category_id = {$data['category_id']}, name = '{$data['name']}',
detail = '{$data['detail']}', price = {$data['price']}, status = {$data['status']}, modified = '{$data['modified']}'";
    //Nếu có cập nhật hình ảnh
    if($data['image'] != null){
        $sql .= ", image = '{$data['image']}'";
}

//Điều kiện
    $sql .= " WHERE product_id = $product_id";

//Query và return
    return mysql_query($sql);
}

//Lấy thông tin sản phẩm trung với product_id
function GetProductById($product_id){
    //SQL
    $sql = "SELECT * FROM product WHERE product_id = $product_id";

//Query
    $query = mysql_query($sql);

//Fetch và return
    return mysql_fetch_assoc($query);
}
//------------delete.php--------------
function DeleteProduct($product_id){
    $sql = "DELETE FROM product WHERE product_id = $product_id";

//Query và return
    return mysql_query($sql);
}
//--------------index.php--------------
//Lấy 6 sản phẩm mới nhất
function GetProductLatestList($limit = 4){
    //SQL
    $sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT 0, $limit";

//Query và return
    return mysql_query($sql);
}
//-----------product-list.php------------------
function GetProductActiveList($category_id){
    //SQL
    $sql = "SELECT * FROM product WHERE status = 1";

//Nếu lấy sản phẩm theo danh mục
    if($category_id != null){
        $sql .= " AND category_id = $category_id";
    }

//Sắp xếp
    $sql .= " ORDER BY product_id DESC";

//Query và return
    return mysql_query($sql);
}


?>