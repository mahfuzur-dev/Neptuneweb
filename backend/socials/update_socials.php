<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$icon = $_POST['icon'];
$icon_link = $_POST['icon_link'];


$update = "UPDATE icons SET icon='$icon', icon_link='$icon_link' WHERE id=$id";
$update_result = mysqli_query($db_connect,$update);
$_SESSION['banner_image']= 'Social icon Updated!';

               
header('location:view_socials.php');

?>