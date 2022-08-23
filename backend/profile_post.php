<?php
require_once("../db.php");
session_start();

if(isset($_POST['update_name'])){
   $name = $_POST['name'];
   $id = $_SESSION['id'];
   $update_name = "UPDATE users SET name = '$name' WHERE id =$id";
   $update_result= mysqli_query($db_connect,$update_name);
   
   $_SESSION['name_after'] = $name;
   header('location:profile.php');

}
 


?>