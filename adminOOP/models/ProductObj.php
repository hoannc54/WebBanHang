<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/5/2015
 * Time: 11:44 PM
 */

class ProductObj {
    protected $productId;
    protected $categoryId;
    protected $name;
    protected $detail;
    protected $image;
    protected $price;
    protected $status;
    protected $created;
    protected $modified;

    public function setProductId($productId){
        $this->productId = $productId;
    }

    public function getProductId(){
        return $this->productId;
    }

    public function setCategoryId($categoryId){
        $this->categoryId = $categoryId;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setDetail($detail){
        $this->detail = $detail;
    }

    public function getDetail(){
        return $this->detail;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getImage(){
        return $this->image;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setCreated($created){
        $this->created = $created;
    }

    public function getCreated(){
        return $this->created;
    }

    public function setModified($modified){
        $this->modified = $modified;
    }

    public function getModified(){
        return $this->modified;
    }
}
?>