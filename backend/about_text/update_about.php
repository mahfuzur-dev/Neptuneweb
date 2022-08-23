<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];

$update = "UPDATE about SET sub_title ='$sub_title',title='$title',desp='$desp' WHERE id = $id";
$update_result = mysqli_query($db_connect,$update);
header('location:view_about.php');


?>