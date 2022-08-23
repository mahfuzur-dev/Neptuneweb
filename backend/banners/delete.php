<?php 
require_once "../../db.php";
$id = $_GET['id'];

$select ="SELECT * FROM banners WHERE id=$id";
$select_result= mysqli_query($db_connect,$select); 
$after_assoc = mysqli_fetch_assoc($select_result);


$delete_from = '../../uploads/banner/'.$after_assoc['banner_image'];
unlink($delete_from);

$delete = "DELETE FROM banners WHERE id = $id";
$delete_result = mysqli_query($db_connect,$delete);
header('location:view_banner.php');
?>
