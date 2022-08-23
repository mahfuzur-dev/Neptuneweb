<?php 
require_once "../../db.php";
$id = $_GET['id'];

$select ="SELECT * FROM works WHERE id=$id";
$select_result= mysqli_query($db_connect,$select); 
$after_assoc = mysqli_fetch_assoc($select_result);


$delete_from = '../../uploads/work/'.$after_assoc['work_image'];
unlink($delete_from);

$delete = "DELETE FROM works WHERE id = $id";
$delete_result = mysqli_query($db_connect,$delete);
header('location:view_work.php');
?>
