<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie('email' , $_SESSION['email'] , time() - 60*60*24 , null , null , false , true);
    setcookie('password' , $_SESSION['password'] , time() - 60*60*24 , null , null , false , true);
    header('location:index.php');
?>