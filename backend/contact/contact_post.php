<?php
session_start();
require_once "../../db.php";

$sub_title = $_POST['sub_title'];
$office = $_POST['office'];
$office_address = $_POST['office_address'];
$office_phone = $_POST['office_phone'];
$office_email = $_POST['office_email'];


$insert = "INSERT INTO contacts(sub_title,office,office_address,office_phone,office_email,status) VALUES('$sub_title','$office','$office_address','$office_phone','$office_email',0)";
$insert_result = mysqli_query($db_connect,$insert);
$_SESSION['allow_extension']= 'Contact Info Added';
header('location:add_contact.php');

?>