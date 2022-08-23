<?php
session_start();
require_once "../../db.php";

$icon = $_POST['icon'];
$number = $_POST['number'];
$desp = $_POST['desp'];


$insert = "INSERT INTO counters(icon,number,desp,status) VALUES('$icon','$number','$desp',0)";
$insert_result = mysqli_query($db_connect,$insert);
$_SESSION['allow_extension']= 'Counter Icon Added';
header('location:add_counter.php');

?>