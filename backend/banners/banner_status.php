<?php
require_once "../../db.php";
$id = $_GET['id'];
$select = "SELECT * FROM banners WHERE id = $id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==1){
    $update = "UPDATE banners SET status=0 WHERE id = $id";
    $update_result = mysqli_query($db_connect,$update);
    header('location:view_banner.php');
}
else{
    $update = "UPDATE banners SET status=1 WHERE id = $id";
    $update_result = mysqli_query($db_connect,$update);
    header('location:view_banner.php');
}
?>