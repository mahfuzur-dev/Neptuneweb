<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$office_address = $_POST['office_address'];
$phone = $_POST['phone'];
$email_address = $_POST['email_address'];


$update = "UPDATE address SET office_address ='$office_address',phone= '$phone',email_address = '$email_address' WHERE id=$id";
$update_result = mysqli_query($db_connect,$update);
header('location:view_address.php');


?>