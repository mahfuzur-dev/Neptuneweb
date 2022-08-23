<?php
session_start();
require_once "../../db.php";

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];
$upload_image = $_FILES['banner_image'];

$explode = explode('.', $upload_image['name']);
$extension = end($explode);
$allowed_extension = array('jpg','png','gif','pdf');


if(in_array($extension, $allowed_extension)){
    if($upload_image['size'] <= 1000000){
        $insert_query = "INSERT INTO banners (sub_title, title, desp) VALUES('$sub_title', '$title','$desp')";
        $insert_result = mysqli_query($db_connect,$insert_query);
        $id = mysqli_insert_id($db_connect);
       $file_name = $id.'.'.$extension;
       $new_location = '../../uploads/banner/'.$file_name;
       move_uploaded_file($upload_image['tmp_name'], $new_location);

       $update_image = "UPDATE banners SET banner_image ='$file_name' WHERE id=$id";
       $update_result = mysqli_query($db_connect, $update_image);

       $_SESSION['banner_image']= 'Banner Photo Updated!';

       header('location:add_banner.php');
    }
    else{
        $_SESSION['size']= 'File Size Too large! Maximun 1 mb';
        header('location:add_banner.php');
    }
}
else{
    $_SESSION['allow_extension']= 'Invalid Extension Allowed Extension(jpg, png, gif, pdf)';
    header('location:add_banner.php');
}


?>