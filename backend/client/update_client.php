<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$desp = $_POST['desp'];
$upload_image = $_FILES['client_image'];

if($upload_image['name']==''){
    $update = "UPDATE clients SET name='$name', title='$title',desp='$desp' WHERE id=$id";
    $update_result = mysqli_query($db_connect,$update);
    header('location:view_client.php');

}
else{
   $explode = explode('.',$upload_image['name']);
   $extension = end($explode);
   $allowed_extension = array('jpg','png','gif','pdf');


    if(in_array($extension, $allowed_extension)){
        if($upload_image['size'] <= 1000000){
                 $select ="SELECT * FROM clients WHERE id=$id";
                 $select_result= mysqli_query($db_connect,$select); 
                $after_assoc = mysqli_fetch_assoc($select_result);


                 $delete_from = '../../uploads/client/'.$after_assoc['client_image'];
                unlink($delete_from);
        
                $file_name = $id.'.'.$extension;
                 $new_location = '../../uploads/client/'.$file_name;
                 move_uploaded_file($upload_image['tmp_name'], $new_location);

                 $update_image = "UPDATE clients SET client_image ='$file_name' WHERE id=$id";
                 $update_result = mysqli_query($db_connect, $update_image);
                 $update = "UPDATE clients SET name='$name', title='$title',desp='$desp' WHERE id=$id";
                 $update_result = mysqli_query($db_connect,$update);
                    header('location:view_client.php');

                 $_SESSION['banner_image']= 'client Photo Updated!';

                 header('location:view_client.php?id='.$id);
        }
     else{
        $_SESSION['size']= 'File Size Too large! Maximun 1 mb';
            header('location:edit_client.php?id='.$id);
        }
    }
}


?>