<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/5/2015
 * Time: 1:22 PM
 */

require '../../libraries/Db.php';
require 'CategoryObj.php';

class Category {
    protected $db;

    public function __construct(){
        $this->db = new Db();
    }

    public function getList(){
        $sql = "SELECT * FROM category ORDER BY category_id DESC";
        $this->db->query($sql);

        //Tạo mảng lưu trữ danh sach
        $listCategory = array();

        while($row = $this->db->fetch()){
            $categoryObj = new CategoryObj();

            $categoryObj->setCategoryId($row['category_id']);
            $categoryObj->setName($row['name']);
            $categoryObj->setStatus($row['status']);
            $categoryObj->setCreated($row['created']);
            $categoryObj->setModified($row['modified']);

            $listCategory[] = $categoryObj;

        }
        return $listCategory;

    }

    public function add($data){
        //SQL
        $sql = "INSERT INTO category(name, status, created, modified) VALUES('{$data['name']}',
{$data['status']}, '{$data['created']}', '{$data['modified']}')";

        return $this->db->query($sql);
    }

    public function getById($category_id){
        $sql = "SELECT * FROM category WHERE category_id = '$category_id'";
        $this->db->query($sql);
        $row = $this->db->fetch();

        $categoryObj = new CategoryObj();

        $categoryObj->setCategoryId($row['category_id']);
        $categoryObj->setName($row['name']);
        $categoryObj->setStatus($row['status']);
        $categoryObj->setCreated($row['created']);
        $categoryObj->setModified($row['modified']);

//Return
        return $categoryObj;

    }

    public function edit($data, $category_id){
        $sql = "UPDATE category SET name =  '{$data['name']}', status = {$data['status']},
modified = '{$data['modified']}' WHERE category_id = $category_id";
        return $this->db->query($sql);
    }

    public function delete($category_id){
        $sql = "DELETE FROM category WHERE category_id = '$category_id'";
        return $this->db->query($sql);
    }

    public function getActiveList(){
        $sql = "SELECT * FROM category WHERE status = 1";
        $this->db->query($sql);
        $row = $this->db->fetch();

        $listCategory = array();

        while($row = $this->db->fetch()){
            $categoryObj = new CategoryObj();

            $categoryObj->setCategoryId($row['category_id']);
            $categoryObj->setName($row['name']);
            $categoryObj->setStatus($row['status']);
            $categoryObj->setCreated($row['created']);
            $categoryObj->setModified($row['modified']);

            $listCategory[] = $categoryObj;

        }
        return $listCategory;
    }

}
?>