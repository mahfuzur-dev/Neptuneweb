<?php
session_start();
require_once "../../db.php";

$office_address = $_POST['office_address'];
$phone = $_POST['phone'];
$email_address = $_POST['email_address'];

$insert = "INSERT INTO address(office_address,phone,email_address,status) VALUES('$office_address','$phone','$email_address',0)";
$insert_result = mysqli_query($db_connect,$insert);
$_SESSION['address']= 'Address updated!';
header('location:add_address.php');


?>