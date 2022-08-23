<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$year = $_POST['year'];
$title = $_POST['title'];
$percentage = $_POST['percentage'];

$update = "UPDATE education SET year='$year',title='$title',percentage='$percentage' WHERE id =$id";
$update_result = mysqli_query($db_connect,$update);
header('location:view_education.php');

?>