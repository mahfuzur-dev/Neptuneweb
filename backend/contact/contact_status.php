<?php
require_once "../../db.php";
$id = $_GET['id'];
$select = "SELECT * FROM contacts WHERE id = $id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==1){
    $select2 = "SELECT COUNT(*) as total FROM contacts WHERE status=1";
    $select_result2 = mysqli_query($db_connect,$select2);
    $after_assoc2 = mysqli_fetch_assoc($select_result2);
    if($after_assoc2['total'] >=1){
        $update = "UPDATE contacts SET status=0 WHERE id = $id";
        $update_result = mysqli_query($db_connect,$update);
        header('location:view_contact.php');
    }
    else{
       
        header('location:view_contact.php');
    }

    
}
else{

    $select2 = "SELECT COUNT(*) as total FROM contacts WHERE status=1";
    $select_result2 = mysqli_query($db_connect,$select2);
    $after_assoc3 = mysqli_fetch_assoc($select_result2);
    if($after_assoc3['total']<=0){
        $update = "UPDATE contacts SET status=1 WHERE id = $id";
        $update_result = mysqli_query($db_connect,$update);
        header('location:view_contact.php');
    }
    else{
        $_SESSION['limit']= 'Maximum 1 Item should me added!!';
        header('location:view_contact.php');
    }
    
}
?>