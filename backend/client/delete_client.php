<?php 
require_once "../../db.php";
$id = $_GET['id'];

$select ="SELECT * FROM client WHERE id=$id";
$select_result= mysqli_query($db_connect,$select); 
$after_assoc = mysqli_fetch_assoc($select_result);


$delete_from = '../../uploads/client/'.$after_assoc['client_image'];
unlink($delete_from);

$delete = "DELETE FROM client WHERE id = $id";
$delete_result = mysqli_query($db_connect,$delete);
header('location:view_client.php');
?>
