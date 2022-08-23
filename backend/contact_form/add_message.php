<?php 
session_start();
require_once "../../db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if($name ==""){
    $_SESSION['send_error']= 'Your fill not fulfill!';
    header('location:../../index.php');
}
else{
    if($email ==""){
        $_SESSION['send_error_e']= 'Your email not fulfill!';
         header('location:../../index.php');
    }
    else{
        if($message==""){
            $_SESSION['send_error_m']= 'Your Message not fulfill!';
            header('location:../../index.php');
        }
        else{
            $insert = "INSERT INTO contact_messages(name,email,message) VALUES('$name','$email','$message')";
            $insert_result = mysqli_query($db_connect,$insert);
             $_SESSION['send_sucess']= 'Your Message Successfully Send';
            header('location:../../index.php');
        }
    }
}


?>