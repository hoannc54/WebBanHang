<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}
require '../../config/Config.php';
if($_GET){
    $user_id = $_GET['user_id'];
}

//$user = GetUserById($user_id);
require '../../views/home/v_home.php';
?>