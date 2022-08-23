<?php
session_start();
require_once "../../db.php";

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$info = $_POST['info'];
$upload_image = $_FILES['work_image'];

$explode = explode('.', $upload_image['name']);
$extension = end($explode);
$allowed_extension = array('jpg','png','gif','pdf');


if(in_array($extension, $allowed_extension)){
    if($upload_image['size'] <= 2000000){
        $insert_query = "INSERT INTO works (sub_title, title, info) VALUES('$sub_title', '$title','$info')";
        $insert_result = mysqli_query($db_connect,$insert_query);
        $id = mysqli_insert_id($db_connect);
       $file_name = $id.'.'.$extension;
       $new_location = '../../uploads/work/'.$file_name;
       move_uploaded_file($upload_image['tmp_name'], $new_location);

       $update_image = "UPDATE works SET work_image ='$file_name' WHERE id=$id";
       $update_result = mysqli_query($db_connect, $update_image);

       $_SESSION['banner_image']= 'Work Information Added!';

       header('location:add_work.php');
    }
    else{
        $_SESSION['size']= 'File Size Too large! Maximun 1 mb';
        header('location:add_work.php');
    }
}
else{
    $_SESSION['allow_extension']= 'Invalid Extension Allowed Extension(jpg, png, gif, pdf)';
    header('location:add_work.php');
}


?>