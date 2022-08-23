<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$info = $_POST['info'];
$upload_image = $_FILES['work_image'];

if($upload_image['name']==''){
    $update = "UPDATE works SET sub_title='$sub_title', title='$title',info='$info' WHERE id=$id";
    $update_result = mysqli_query($db_connect,$update);
    header('location:view_work.php');

}
else{
   $explode = explode('.',$upload_image['name']);
   $extension = end($explode);
   $allowed_extension = array('jpg','png','gif','pdf');


    if(in_array($extension, $allowed_extension)){
        if($upload_image['size'] <= 2000000){
                 $select ="SELECT * FROM works WHERE id=$id";
                 $select_result= mysqli_query($db_connect,$select); 
                $after_assoc = mysqli_fetch_assoc($select_result);


                 $delete_from = '../../uploads/work/'.$after_assoc['work_image'];
                unlink($delete_from);
        
                $file_name = $id.'.'.$extension;
                 $new_location = '../../uploads/work/'.$file_name;
                 move_uploaded_file($upload_image['tmp_name'], $new_location);

                 $update_image = "UPDATE works SET work_image ='$file_name' WHERE id=$id";
                 $update_result = mysqli_query($db_connect, $update_image);

                 $_SESSION['banner_image']= 'Work Photo Updated!';

                 header('location:view_work.php?id='.$id);
        }
     else{
        $_SESSION['size']= 'File Size Too large! Maximun 2 mb';
            header('location:edit_work.php?id='.$id);
        }
    }
}


?>