<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/15/2015
 * Time: 1:43 AM
 */
session_start();
session_destroy();
header('location:login.php');
?>