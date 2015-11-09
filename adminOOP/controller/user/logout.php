<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/3/2015
 * Time: 11:55 PM
 */

session_start();
session_destroy();
header('location:login.php');
?>