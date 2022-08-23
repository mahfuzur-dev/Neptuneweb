<?php
session_start();
require_once "../../db.php";

$icon = $_POST['icon'];
$icon_link = $_POST['icon_link'];


$insert = "INSERT INTO icons(icon,icon_link,status) VALUES('$icon','$icon_link',0)";
$insert_result = mysqli_query($db_connect,$insert);
$_SESSION['allow_extension']= 'Social Icon Added';
header('location:add_social.php');

?>