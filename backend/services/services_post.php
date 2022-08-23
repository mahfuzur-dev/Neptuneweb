<?php
session_start();
require_once "../../db.php";

$icon = $_POST['icon'];
$heading = $_POST['heading'];
$sub_title = $_POST['sub_title'];


$insert = "INSERT INTO services(icon,heading,title,status) VALUES('$icon','$heading','$sub_title',0)";
$insert_result = mysqli_query($db_connect,$insert);
$_SESSION['allow_extension']= 'Services Item Added';
header('location:add_services.php');

?>