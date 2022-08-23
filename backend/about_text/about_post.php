<?php
session_start();
require_once "../../db.php";

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];

$insert = "INSERT INTO about(sub_title,title,desp,status) VALUES('$sub_title','$title','$desp',0)";
$insert_result = mysqli_query($db_connect,$insert);
$_SESSION['about']='About Description added!';
header('location:add_about.php')




?>