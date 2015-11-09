<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/15/2015
 * Time: 12:48 AM
 */
function GetUserByUsername($username){
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $query = mysql_query($sql);
    return mysql_fetch_assoc($query);

}

function GetUserList(){
    $sql = "SELECT * FROM user ORDER BY user_id DESC"; //ORDER BY : láy danh sách theo thứ tự tăng dần
    return mysql_query($sql);
}
//Hàm đưa dữ liệu thông tin thành viên vào cơ sở dữ liệu
function AddUser($data){
    $sql = "INSERT INTO user(username,password,fullname,email,status,created,modified)
            VALUES ('{$data['username']}','{$data['password']}','{$data['fullname']}',
            '{$data['email']}', {$data['status']}, '{$data['created']}', '{$data['modified']}')";
    return mysql_query($sql);
}
//Chỉnh sửa thông tin thành viên
function GetUserById($user_id){
    $sql = "SELECT * FROM user WHERE user_id='$user_id'";
    $query = mysql_query($sql);
    if($query){
        $data = mysql_fetch_assoc($query);
    }
    else
        echo "lay du lieu that bai";

    return $data;
}
function EditUser($data, $user_id){
    $sql = "UPDATE user SET username = '{$data['username']}', fullname = '{$data['fullname']}',
      email = '{$data['email']}', status = {$data['status']}, modified = '{$data['modified']}'";

    if($data['password'] != NULL){
        $sql .= ",password = '{$data['password']}'";
    }
    $sql .= "WHERE user_id = $user_id";
    $query = mysql_query($sql);
    if(!$query){
        echo "That bai";
    }
    else
        return 1;
}
//Chức năng xóa thành viên
function DeleteUser($user_id){
    $sql = "DELETE FROM user WHERE user_id=$user_id";
    return mysql_query($sql);
}
?>