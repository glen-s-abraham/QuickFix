<?php
  session_start();
   unset($_SESSION['user']);
   unset($_SESSION['name']);
   session_destroy();
     header("location:../user_login.php");
?>
