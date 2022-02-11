<?php
    include "connect.php";
    session_start();
    $query = "SELECT * FROM comptes WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."' ";
    $comptes = mysqli_query($connect , $query);
    $compte = mysqli_fetch_assoc($comptes);
    if($compte){
        $_SESSION['email'] = $_POST['email'];  
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['username'] = $compte['username'];
        $_SESSION['id'] = $compte['id'];
        header("location:Dashboard.php");
    }
?>