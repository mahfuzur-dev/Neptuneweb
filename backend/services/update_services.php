<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$icon = $_POST['icon'];
$heading = $_POST['heading'];
$sub_title = $_POST['sub_title'];


$update = "UPDATE services SET icon='$icon', heading='$heading',title='$sub_title' WHERE id=$id";
$update_result = mysqli_query($db_connect,$update);
$_SESSION['services']= 'Servies Info Updated!';

               
header('location:view_services.php');

?>