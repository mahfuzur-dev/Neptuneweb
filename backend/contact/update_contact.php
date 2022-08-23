<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$sub_title = $_POST['sub_title'];
$office = $_POST['office'];
$office_address = $_POST['office_address'];
$office_phone = $_POST['office_phone'];
$office_email = $_POST['office_email'];

$update = "UPDATE contacts SET sub_title='$sub_title', office='$office',office_address='$office_address',office_phone='$office_phone',office_email='$office_email' WHERE id=$id";
$update_result = mysqli_query($db_connect,$update);
$_SESSION['banner_image']= 'Contact Info Updated!';

               
header('location:view_contact.php');

?>