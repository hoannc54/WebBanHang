<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/5/2015
 * Time: 11:44 PM
 */
require_once '../../libraries/Db.php';
require 'ProductObj.php';
class Product {
   protected $db;
    public function __construct(){
        $this->db = new Db();
    }

    public function getList(){
//SQL
        $sql = "SELECT * FROM product ORDER BY product_id DESC";

//Query
        $this->db->query($sql);

//Tạo mãng lưu trữ
        $listProduct = array();

//Fetch
        while($row = $this->db->fetch()){
//Khởi tạo đối tượng ProductObj
            $productObj = new ProductObj();

//Gán thông tin
            $productObj->setProductId($row['product_id']);
            $productObj->setCategoryId($row['category_id']);
            $productObj->setName($row['name']);
            $productObj->setDetail($row['detail']);
            $productObj->setImage($row['image']);
            $productObj->setPrice($row['price']);
            $productObj->setStatus($row['status']);
            $productObj->setCreated($row['created']);
            $productObj->setModified($row['modified']);

//Gán vào mãng lưu trữ
            $listProduct[] = $productObj;
        }

//Return
        return $listProduct;
    }

    public function getProductById($product_id){
        $sql = "SELECT * FROM product WHERE product_id = '$product_id'";
        $this->db->query($sql);
        $row = $this->db->fetch();

        $productObj = new ProductObj();
        $productObj->setProductId($row['product_id']);
        $productObj->setCategoryId($row['category_id']);
        $productObj->setName($row['name']);
        $productObj->setDetail($row['detail']);
        $productObj->setImage($row['image']);
        $productObj->setPrice($row['price']);
        $productObj->setStatus($row['status']);
        $productObj->setCreated($row['created']);
        $productObj->setModified($row['modified']);

//Return
        return $productObj;
    }

    public function edit($data, $product_id){
        $sql = "UPDATE product SET category_id = '{$data['category_id']}', name = '{$data['name']}',detail = '{$data['detail']}',
 price = {$data['price']}, status = {$data['status']}, modified = '{$data['modified']}'";
        //Nếu có cập nhật hình ảnh
        if($data['image'] != null){
            $sql .= ", image = '{$data['image']}'";
        }

//Điều kiện
        $sql .= " WHERE product_id = $product_id";

        return $this->db->query($sql);
    }

    public function delete($product_id){
        $sql = "DELETE FROM product WHERE product_id = '$product_id'";
        return $this->db->query($sql);
    }

    public function add($data){
        $sql = "INSERT INTO product(category_id, name, detail, image, price, status, created, modified)
VALUES ({$data['category_id']}, '{$data['name']}', '{$data['detail']}', '{$data['image']}', {$data['price']}, {$data['status']}, '{$data['created']}', '{$data['modified']}')";
    return $this->db->query($sql);
    }
}
?>