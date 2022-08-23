<?php
session_start();
require_once "../../db.php";
$id = $_POST['id'];

$upload_image = $_FILES['logo_image'];
   $explode = explode('.',$upload_image['name']);
   $extension = end($explode);
   $allowed_extension = array('jpg','png','gif','pdf');



   if(in_array($extension, $allowed_extension)){
        if($upload_image['size'] <= 1000000){
                 $select ="SELECT * FROM logos WHERE id=$id";
                 $select_result= mysqli_query($db_connect,$select); 
                $after_assoc = mysqli_fetch_assoc($select_result);


                 $delete_from = '../../uploads/logo/'.$after_assoc['logo_image'];
                unlink($delete_from);
        
                $file_name = $id.'.'.$extension;
                 $new_location = '../../uploads/logo/'.$file_name;
                 move_uploaded_file($upload_image['tmp_name'], $new_location);

                 $update_image = "UPDATE logos SET logo_image ='$file_name' WHERE id=$id";
                 $update_result = mysqli_query($db_connect, $update_image);

                 $_SESSION['logo_image']= 'Logo Photo Updated!';

                 header('location:edit_logo.php?id='.$id);
        }
     else{
        $_SESSION['size']= 'File Size Too large! Maximun 1 mb';
            header('location:edit_logo.php?id='.$id);
        }
    }
    else{
        $_SESSION['extension']= 'Invalid Expension!. Allowed Extension(jpg, png, gif, pdf)';
        header('location:edit_logo.php?id='.$id);
    }
    



?>