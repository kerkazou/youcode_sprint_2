<?php
    include "connect.php";
    $email=htmlspecialchars($_POST['email']);
    $pass=md5($_POST['pass']);
    session_start();
    $query = "SELECT * FROM comptes WHERE email = '$email' AND password = '$pass'";
    $comptes = mysqli_query($connect , $query);
    $compte = mysqli_fetch_assoc($comptes);
    if($compte){
        $_SESSION['email'] = $_POST['email'];  
        $_SESSION['password'] = $_POST['pass'];
        $_SESSION['username'] = $compte['username'];
        $_SESSION['id'] = $compte['id'];
        setcookie('email' , $_SESSION['email'] , time() + 60*60 , null , null , false , true);
        setcookie('password' , $_SESSION['password'] , time() + 60*60 , null , null , false , true);
        header("location:Dashboard.php");
    }else{
        header("location:index.php?error=Your email or password is incorrect");
    }
    if(isset($_POST['checked'])){
        setcookie('emailr' , $_SESSION['email'] , time() + 60*60 , null , null , false , true);
        setcookie('passwordr' , $_SESSION['password'] , time() + 60*60 , null , null , false , true);
    }
    //mysqli_real_escape_string();   md5   rand()
    //password_hash( ... , PASSWORD8DEFAULT)
    //filter_var(... , FILTER_VALIDATE_EMAIL)
?>