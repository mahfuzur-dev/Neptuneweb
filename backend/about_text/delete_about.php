<?php 
require_once "../../db.php";
$id = $_GET['id'];

$select ="SELECT * FROM about WHERE id=$id";
$select_result= mysqli_query($db_connect,$select); 
$after_assoc = mysqli_fetch_assoc($select_result);




$delete = "DELETE FROM about WHERE id = $id";
$delete_result = mysqli_query($db_connect,$delete);
header('location:view_about.php');
?>
