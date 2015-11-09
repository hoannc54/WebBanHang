<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/3/2015
 * Time: 10:10 PM
 */
//require_one : nếu file đã đc chèn trước đó rồi thì bây giờ không cần chèn nữa.

require_once '../../libraries/Db.php';
require_once '../../models/UserObj.php';

class User
{
    protected $db;

    public function __construct()
    {
        $this->db = new Db();
    }

    public function getByUsername($username)
    {
        $sql = "SELECT * FROM user WHERE username = '$username' AND status =1";
        //Truy vấn
        $this->db->query($sql);
        //Lấy dữ liệu
        $data = $this->db->fetch();

        //Khởi tạo đối tượng người dùng
        $userObj = new UserObj();
        //Gán thông tin từ database vào đối tượng vừa khởi tạo
        $userObj->setUserId($data['user_id']);
        $userObj->setUsername($data['username']);
        $userObj->setPassword($data['password']);
        $userObj->getFullname($data['fullname']);
        $userObj->setEmail($data['email']);
        $userObj->setStatus($data['status']);
        $userObj->setCreated($data['created']);
        $userObj->getModified($data['modified']);

        return $userObj;
    }

    public function getListUser()
    {
        $sql = "SELECT * FROM user ORDER BY user_id DESC";
        $this->db->query($sql);
        $listUser = array();
        while ($row = $this->db->fetch()) {
            $userObj = new UserObj();

            $userObj->setUserId($row['user_id']);
            $userObj->setUsername($row['username']);
            $userObj->setPassword($row['password']);
            $userObj->setFullname($row['fullname']);
            $userObj->setEmail($row['email']);
            $userObj->setStatus($row['status']);
            $userObj->setCreated($row['created']);
            $userObj->setModified($row['modified']);
            $listUser[] = $userObj;
        }

        return $listUser;

    }

    //Hàm thêm mới thành viên vào database
    public function addUser($data)
    {
        //SQL
        $sql = "INSERT INTO user(username, password, fullname, email, status, created, modified)
VALUES('{$data['username']}', '{$data['password']}', '{$data['fullname']}', '{$data['email']}', {$data['status']}, '{$data['created']}', '{$data['modified']}')";

//Query và return
        return $this->db->query($sql);
    }

//Lấy thông tin thành viên dựa vào id

    public function getUserById($user_id)
    {
        $sql = "SELECT * FROM user WHERE user_id = '$user_id'";

        //Query
        $this->db->query($sql);

//Fetch
        $row = $this->db->fetch();

//Khởi tạo đối tượng UserObj
        $userObj = new UserObj();

        //Gán thông tin
        $userObj->setUserId($row['user_id']);
        $userObj->setUsername($row['username']);
        $userObj->setPassword($row['password']);
        $userObj->setFullname($row['fullname']);
        $userObj->setEmail($row['email']);
        $userObj->setStatus($row['status']);
        $userObj->setCreated($row['created']);
        $userObj->setModified($row['modified']);

//Return
        return $userObj;
    }

//Chỉnh sửa thông tin của thành viên
    public function editUser($data, $user_id)
    {
        //SQL
        $sql = "UPDATE tbl_user SET username = '{$data['username']}', fullname = '{$data['fullname']}',
email = '{$data['email']}', status = {$data['status']}, modified = '{$data['modified']}'";

        //Nếu có cập nhật mật khẩu
        if($data['password'] != null){
            $sql .= ", password = {$data['password']}";
}

//Điều kiện
        $sql .= " WHERE user_id = '$user_id''";

//Query và return
        return $this->db->query($sql);
    }

    //Xóa dữ liệu thành viên
    public function deleteUser($user_id){
        $sql = "DELETE FROM user WHERE user_id = '$user_id'";

        return $this->db->query($sql);
    }

}
?>