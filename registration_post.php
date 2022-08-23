<?php
session_start();
require_once('db.php');
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
 $confirm_password= $_POST['confirm_password'];
 $flag = false;

if($name){
    if(ctype_alpha($name)){
        $_SESSION['old_name']= $name;
    }
    else{
        $flag= true;
        $_SESSION['name_error']= 'Name Format is invalid';
    }
    
   
}
else{
   $flag= true;
   $_SESSION['name_error']= 'Name is Required';
}
if($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['old_email']= $email;
    }
    else{
        $flag= true;
        $_SESSION['email_error']= 'Email Format is invalid';
    }
    
}
else{
    $flag= true;
   $_SESSION['email_error']= 'Email is Required';
}
if($password){
   
}
else{
    $flag= true;
   $_SESSION['password_error']= 'Password is Required';
}
if($confirm_password){
   
}
else{
    $flag= true;
   $_SESSION['confirm_password_error']= 'Confirm Password is Required';
}
if($password != $confirm_password){
    $flag= true;
   $_SESSION['password_error']= 'Do not match Password';
}

if($flag){
    header('location:registration.php');
}
else{
    $encript_password = md5($password);
    $duplicate_select = "SELECT COUNT(*) AS total FROM users WHERE email ='$email'";
    $duplicate_select_query= mysqli_query($db_connect,$duplicate_select);
    $duplicate_assoc = mysqli_fetch_assoc($duplicate_select_query);
  if($duplicate_assoc['total']==1){
        $_SESSION['email_duplicate'] = 'Email Is Already Used';
        header('location:registration.php');
  }
  else{
    $insert_query = "INSERT INTO users (name,email,password) VALUES('$name','$email','$encript_password')";
    $insert_result = mysqli_query($db_connect,$insert_query);
    $_SESSION['registration_success']= 'Sign Up Successfull';
    header("location:signin.php");
  }

  
}
?>