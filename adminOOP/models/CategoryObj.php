<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/5/2015
 * Time: 1:22 PM
 */

class CategoryObj {
    protected $categoryId;
    protected $name;
    protected $status;
    protected $created;
    protected $modified;

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