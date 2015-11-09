<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/17/2015
 * Time: 6:00 PM
 */
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}
//Add các file cần thiết
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$flag = 0;
if($_POST){
        $list_user = GetUserList();
        while($users = mysql_fetch_assoc($list_user)) {
            if ($users['username'] == $_POST['username']) {
                $flag = 1;
            }
            if($users['email'] == $_POST['email']){
                $flag = 2;
            }
        }
        if($flag == 0){
            $data = array(
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'fullname' => $_POST['fullname'],
                'email' => $_POST['email'],
                'status' => isset($_POST['status'])? 1 : 0, //Nếu tồn tại thì trạng thái là 1, ngược lại là 0
                'created' => date('Y-m-d H:i:s'), //Year-month(1-12)-day(1-31) hour(00-23)-minutes(00-59)-Seconds(0-59)
                'modified' => date('Y-m-d H:i:s')
            );
            if(AddUser($data)){
                //Tạo cờ lưu thông báo thành công
                $_SESSION['success'] = true;
                header('location:list.php'); // Tải lại trang để reset form
            }
        }
        //Sử dụng mảng kết hợp để lưu trữ thông tin

}


require '../../views/user/v_add.php';
?>