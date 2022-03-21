<?php 
    include "connect.php";
    if(isset($_POST['Sign_up'])){
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $pass = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if($pass == $confirm_password){
            $query = "SELECT * FROM comptes WHERE email = '$email' AND username = '$username'";
            $comptes = mysqli_query($connect , $query);
            $compte = mysqli_fetch_assoc($comptes);
            if($compte){
                header("location:sign_up.php?error=compte_existed");
            }else{
                $pass = md5($_POST['password']);
                $query = "INSERT INTO comptes (username,email,password) values ('$username','$email','$pass')";
                $comptes = mysqli_query($connect , $query);
                header("location:index.php?valid=");
            }
        }else{
            header("location:sign_up.php?error=Confirm_password");
        }
    }
?>