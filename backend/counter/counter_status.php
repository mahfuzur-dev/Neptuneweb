<?php
require_once "../../db.php";
$id = $_GET['id'];
$select = "SELECT * FROM counters WHERE id = $id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==1){
    $select2 = "SELECT COUNT(*) as total FROM counters WHERE status=1";
    $select_result2 = mysqli_query($db_connect,$select2);
    $after_assoc2 = mysqli_fetch_assoc($select_result2);
    if($after_assoc2['total'] >1){
        $update = "UPDATE counters SET status=0 WHERE id = $id";
        $update_result = mysqli_query($db_connect,$update);
        header('location:view_counter.php');
    }
    else{
        $_SESSION['limit']= 'Minimun 1 icon should me added!!';
        header('location:view_counter.php');
    }

    
}
else{

    $select2 = "SELECT COUNT(*) as total FROM counters WHERE status=1";
    $select_result2 = mysqli_query($db_connect,$select2);
    $after_assoc3 = mysqli_fetch_assoc($select_result2);
    if($after_assoc3['total']<=3){
        $update = "UPDATE counters SET status=1 WHERE id = $id";
        $update_result = mysqli_query($db_connect,$update);
        header('location:view_counter.php');
    }
    else{
        $_SESSION['limit']= 'Maximum 4 icon should me added!!';
        header('location:view_counter.php');
    }
    
}
?>