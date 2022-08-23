<?php
require_once("../db.php");
session_start();
$password = md5($_POST['password']);
$id = $_POST['id'];
$update_password = "UPDATE users SET password ='$password' WHERE id = $id";
$update_result = mysqli_query($db_connect, $update_password);
$_SESSION['password'] ='Password Is Updated!';
header('location:profile.php')
?>