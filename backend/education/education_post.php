<?php
session_start();
require_once "../../db.php";

$year = $_POST['year'];
$title = $_POST['title'];
$percentage = $_POST['percentage'];

$insert = "INSERT INTO education(year,title,percentage,status) VALUES('$year','$title','$percentage',0)";
$insert_result = mysqli_query($db_connect,$insert);
$_SESSION['edu_success']='Education Info Added!';
header('location:add_education.php');

?>