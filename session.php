<?php
   include_once('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($link,"select email from sign where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
 
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      $error = 'this is error message';
   }
   if($error){
    echo $error;
}
?>