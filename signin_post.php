<?php
session_start();
require_once('db.php');
$email = $_POST['email'];
$password = md5($_POST['password']);

$select_query = "SELECT COUNT(*) AS total FROM users WHERE email ='$email' AND password = '$password'";
$select_result = mysqli_query($db_connect,$select_query);
$select_assoc = mysqli_fetch_assoc($select_result);
if($select_assoc['total']==1){
    $select= "SELECT id, name, email FROM users WHERE email = '$email'";
    $connect = mysqli_query($db_connect,$select);
    $after_assoc = mysqli_fetch_assoc($connect);
    $_SESSION['name_after'] = $after_assoc['name'];
    $_SESSION['email_after'] = $after_assoc['email'];
    $_SESSION['id']= $after_assoc['id'];
    header('location:backend/dashboard.php');
}
else{
    
    header('location:signin.php');
}
?>