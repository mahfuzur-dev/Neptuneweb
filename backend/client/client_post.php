<?php
session_start();
require_once "../../db.php";

$desp = $_POST['desp'];
$name = $_POST['name'];
$title = $_POST['title'];
$upload_image = $_FILES['client_image'];

$explode = explode('.', $upload_image['name']);
$extension = end($explode);
$allowed_extension = array('jpg','png','gif','pdf');


if(in_array($extension, $allowed_extension)){
    if($upload_image['size'] <= 1000000){
        $insert_query = "INSERT INTO clients (desp, name, title) VALUES('$desp', '$name','$title')";
        $insert_result = mysqli_query($db_connect,$insert_query);
        $id = mysqli_insert_id($db_connect);
       $file_name = $id.'.'.$extension;
       $new_location = '../../uploads/client/'.$file_name;
       move_uploaded_file($upload_image['tmp_name'], $new_location);

       $update_image = "UPDATE clients SET client_image ='$file_name' WHERE id=$id";
       $update_result = mysqli_query($db_connect, $update_image);

       $_SESSION['banner_image']= 'Client Photo Updated!';

       header('location:add_client.php');
    }
    else{
        $_SESSION['size']= 'File Size Too large! Maximun 1 mb';
        header('location:add_client.php');
    }
}
else{
    $_SESSION['allow_extension']= 'Invalid Extension Allowed Extension(jpg, png, gif, pdf)';
    header('location:add_client.php');
}


?>