<?php
require_once("../db.php");
session_start();
$id = $_SESSION['id'];
$upload_photo = $_FILES['photo'];
$explode = explode('.',$upload_photo['name']);
$extension= end($explode);
$allowed_extension = array('jpg','png','gif','pdf');
if(in_array($extension, $allowed_extension)){
    if($upload_photo['size'] <= 1000000){
       $file_name = $id.'.'.$extension;
       $new_location = '../uploads/profile/'.$file_name;
       move_uploaded_file($upload_photo['tmp_name'], $new_location);

       $update_photo = "UPDATE users SET profile_photo ='$file_name' WHERE id=$id";
       $update_result = mysqli_query($db_connect, $update_photo);

       $_SESSION['update_photo']= 'Profile Photo Updated!';
       header('location:profile.php');
    }
    else{
        $_SESSION['size']= 'File Size Too large! Maximun 1 mb';
        header('location:profile.php');
    }
}
else{
    $_SESSION['allow_extension']= 'Invalid Extension Allowed Extension(jpg, png, gif, pdf)';
    header('location:profile.php');
}

?>