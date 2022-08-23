<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];
$upload_image = $_FILES['banner_image'];

if($upload_image['name']==''){
    $update = "UPDATE banners SET sub_title='$sub_title', title='$title',desp='$desp' WHERE id=$id";
    $update_result = mysqli_query($db_connect,$update);
    header('location:view_banner.php');

}
else{
   $explode = explode('.',$upload_image['name']);
   $extension = end($explode);
   $allowed_extension = array('jpg','png','gif','pdf');


    if(in_array($extension, $allowed_extension)){
        if($upload_image['size'] <= 1000000){
                 $select ="SELECT * FROM banners WHERE id=$id";
                 $select_result= mysqli_query($db_connect,$select); 
                $after_assoc = mysqli_fetch_assoc($select_result);


                 $delete_from = '../../uploads/banner/'.$after_assoc['banner_image'];
                unlink($delete_from);
        
                $file_name = $id.'.'.$extension;
                 $new_location = '../../uploads/banner/'.$file_name;
                 move_uploaded_file($upload_image['tmp_name'], $new_location);

                 $update_image = "UPDATE banners SET banner_image ='$file_name' WHERE id=$id";
                 $update_result = mysqli_query($db_connect, $update_image);

                 $_SESSION['banner_image']= 'Banner Photo Updated!';

                 header('location:edit_banner.php?id='.$id);
        }
     else{
        $_SESSION['size']= 'File Size Too large! Maximun 1 mb';
            header('location:edit_banner.php?id='.$id);
        }
    }
}


?>