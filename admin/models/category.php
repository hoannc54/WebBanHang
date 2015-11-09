<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/27/2015
 * Time: 11:40 PM
 *File xử lý các lệnh liên quan đến cơ sở dữ liệu
 */
function GetCategoryList(){
    $sql = "SELECT * FROM category ORDER BY category_id DESC";
    return mysql_query($sql);
}
//Truy vấn thêm danh mục sản phẩm
function AddCategory($data){
    $sql = "INSERT INTO category(name, status, created, modified)
VALUES('{$data['name']}', {$data['status']}, '{$data['created']}', '{$data['modified']}')";
    return mysql_query($sql);
}

function GetCategoryById($category_id){
//SQL
    $sql = "SELECT * FROM category WHERE category_id = $category_id";

//Query
    $query = mysql_query($sql);

//Fetch và return
    return mysql_fetch_assoc($query);
}
//Cập nhật thông tin danh mục sản phẩm
function EditCategory($data, $category_id){
    $sql = "UPDATE category SET name = '{$data['name']}', status = {$data['status']}, modified = '{$data['modified']}'
    WHERE category_id = $category_id";

//Query và return
    return mysql_query($sql);
}

//Xóa
function DeleteCategory($category_id){
    $sql = "DELETE FROM category WHERE category_id = $category_id";

//Query và return
    return mysql_query($sql);

}
?>