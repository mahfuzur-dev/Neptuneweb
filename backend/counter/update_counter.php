<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$icon = $_POST['icon'];
$number = $_POST['number'];
$desp = $_POST['desp'];


$update = "UPDATE counters SET icon='$icon', number='$number', desp='$desp' WHERE id=$id";
$update_result = mysqli_query($db_connect,$update);
$_SESSION['banner_image']= 'Counter icon Updated!';

               
header('location:view_counter.php');


?>