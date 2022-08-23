<?php
session_start();
require_once "../../db.php";
$id = $_GET['id'];
$select = "SELECT * FROM services WHERE id = $id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==1){
    $select2 = "SELECT COUNT(*) as total FROM services WHERE status=1";
    $select_result2 = mysqli_query($db_connect,$select2);
    $after_assoc2 = mysqli_fetch_assoc($select_result2);
    if($after_assoc2['total'] >2){
        $update = "UPDATE services SET status=0 WHERE id = $id";
        $update_result = mysqli_query($db_connect,$update);
        header('location:view_services.php');
    }
    else{
        $_SESSION['limit']= 'Minimun 3 service part should me added!!';
        header('location:view_services.php');
    }

    
}
else{

    $select2 = "SELECT COUNT(*) as total FROM services WHERE status=1";
    $select_result2 = mysqli_query($db_connect,$select2);
    $after_assoc3 = mysqli_fetch_assoc($select_result2);
    if($after_assoc3['total']<=5){
        $update = "UPDATE services SET status=1 WHERE id = $id";
        $update_result = mysqli_query($db_connect,$update);
        header('location:view_services.php');
    }
    else{
        $_SESSION['limit']= 'Maximum 6 services should me added!!';
        header('location:view_services.php');
    }
    
}
?>