<?php
   include("connection.php");
   session_start();
   
   $user_check = $_SESSION['user_email'];
   
   $ses_sql = mysqli_query($conn,"SELECT email FROM users WHERE email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['user_email'])){
      header("location:login.php");
      die();
   }
?>