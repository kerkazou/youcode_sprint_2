<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Sign in</title>
</head>
<body>
    <!-------------------------------Log in-------------------------------->
    <section class="vh-100 d-flex align-items-center" style="background-image: linear-gradient(50deg,#00C1FE,#FAFFC1);">
        <div class="container bg-white col-md-4 p-4" style="border-radius: 20px;">
            <h1 class="border-start border-5 border-primary">E-classe</h1>
            <h3 class="text-center mt-4">SIGN IN</h3>
            <?php
                if(isset($_GET['error'])){
                    echo '
                        <div class="alert alert-danger d-flex align-items-center p-1" role="alert">
                            <h2 class="bi bi-exclamation-triangle flex-shrink-0 mx-3" width="24" height="24"></h2>
                            <div>Your email or password is incorrect, <br>Enter your credentials to access your account</div>
                        </div>
                    ';
                }else{
                    echo'<p class="text-center text-secondary">Enter your credentials to access your account</p>';
                }
            ?>
            <form method="POST" action="conn_session.php">
                <label class="d-block mt-4 text-secondary" for="">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter your email" value="<?php if(isset($_COOKIE['emailr'])) echo $_COOKIE['emailr'] ?>" class=" w-100 ps-3 rounded-2 border border-gray-600 border-2 col-form-label">
                <label class="d-block mt-4 text-secondary" for="">Password</label>
                <input type="password" name="pass" placeholder="Enter your password" value="<?php if(isset($_COOKIE['passwordr'])) echo $_COOKIE['passwordr'] ?>" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 d-block col-form-label">
                <input type="checkbox" class="mt-4 mx-2" name="checked" id="checked">
                <label for="checked" class="text-secondary">keep me signed in on this device</label>
                <button type="submit" name="submit" class="btn text-white w-100 mt-4" style="background-color: #00C1FE;">SIN IN</button>
            </form>
            <p class="mt-3 mb-0 text-center">Forget your password?<a class="btn btn-link" style="color: #00C1FE;">Reset Password</a></p>
            <p class="mb-0 text-center">Not registred?<a class="btn btn-link" href="sign_up.php" style="color: #00C1FE;">Create an Account</a></p>
        </div>
    </section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="index.js"></script>
<?php
    if(isset($_GET['valid'])){
        echo "
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Votre inscription a bien succès',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
        ";
    }
?>