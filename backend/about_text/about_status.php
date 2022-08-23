<?php
require_once "../../db.php";
$id = $_GET['id'];
$select = "SELECT * FROM about WHERE id = $id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==1){
    $update = "UPDATE about SET status=0 WHERE id = $id";
    $update_result = mysqli_query($db_connect,$update);
    header('location:view_about.php');
}
else{
    $update = "UPDATE about SET status=1 WHERE id = $id";
    $update_result = mysqli_query($db_connect,$update);
    header('location:view_about.php');
}
?>