<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/13/2015
 * Time: 5:39 PM
 */
//require '../configs/config.php';
// có thể sử dụng require_one : kiểm tra file được liên kết đã liên kết trước đó chưa, nếu chưa được liên kết thì thực hiện liên kết mới
//nếu đã có thì ko cần liên kết file đó nữa
//Ket noi

$connect = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die('Not connect DB');
$db = mysql_select_db(DB_DATABASE,$connect) or die('Not select DB');

//Luu tru UTF 8
mysql_query('SET NAMES UTF8',$connect);
?>