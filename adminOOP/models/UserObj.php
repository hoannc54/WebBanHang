<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/3/2015
 * Time: 10:05 PM
 */
//Đối tượng thành viên
class UserObj {
    protected $userId;
    protected $username;
    protected $password;
    protected $fullname;
    protected $email;
    protected $status;
    protected $created;
    protected $modified;

    public function setUserId($userId){
        $this -> userId = $userId;
    }
    public function getUserId(){
        return $this -> userId;
    }

    public function setUsername($username){
        $this -> username = $username;
    }
    public function getUsername(){
        return $this->username;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }

    public function setFullname($fullname){
        $this -> fullname = $fullname;
    }
    public function getFullname(){
        return $this->fullname;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
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

