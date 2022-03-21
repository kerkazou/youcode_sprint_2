<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Sign up</title>
</head>
<body>
    <!-------------------------------Sign up-------------------------------->
    <section class="vh-100 d-flex align-items-center" style="background-image: linear-gradient(50deg,#00C1FE,#FAFFC1);">
        <div class="container bg-white col-md-4 p-4" style="border-radius: 20px;">
            <h1 class="border-start border-5 border-primary">E-classe</h1>
            <h3 class="text-center mt-4">SIGN UP</h3>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == 'Confirm_password'){
                        echo '
                            <div class="alert alert-danger d-flex justify-content-between align-items-center p-1 ps-4" role="alert">
                                <strong>Confirm your password</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        ';
                    }elseif($_GET['error'] == 'compte_existed'){
                        echo '
                            <div class="alert alert-danger d-flex justify-content-between align-items-center p-1" role="alert">
                                <strong>Your username or email is a really existed,</strong><br><a class="btn btn-link" href="index.php" style="color: #00C1FE;">Sign up</a>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        ';
                    }
                }
                else{
                    echo'<p class="text-center text-secondary">Please fill out the form below to create your account!</p>';
                }
            ?>
            <form method="POST" action="creat_account.php">
            <label class="d-block mt-4 text-secondary" for="">UserName</label>
                <input type="text" name="username" placeholder="Enter your first and last name" class=" w-100 ps-3 rounded-2 border border-gray-600 border-2 col-form-label" required>
                <label class="d-block mt-4 text-secondary" for="">Email</label>
                <input type="email" name="email" placeholder="Enter your email" class=" w-100 ps-3 rounded-2 border border-gray-600 border-2 col-form-label" required>
                <label class="d-block mt-4 text-secondary" for="">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 d-block col-form-label" required>
                <label class="d-block mt-4 text-secondary" for="">Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm your password" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 d-block col-form-label" required>
                <button type="submit" name="Sign_up" class="btn text-white w-100 mt-4" style="background-color: #00C1FE;">SIN UP</button>
            </form>
            <p class="mt-4 mb-0 text-center">Already a member?<a class="btn btn-link" href="index.php" style="color: #00C1FE;">Sign in</a></p>
        </div>
    </section>
</body>
</html>