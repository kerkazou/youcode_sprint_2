<?php
    session_start();
    if(!isset($_COOKIE['email']) && !isset($_COOKIE['password'])){
        header("location:index.php");
    }else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>student</title>
</head>
<body>
    <section class="d-sm-flex overflow-hidden" style="background-color: #F8F8F8;">

        <div class="col-sm-2 pt-3" style="background-color: #FAFFC1;">
            <?php // sidebar
                include 'sidebar.php'
            ?>
        </div>

        <div class="col-md-10 mb-5">

            <div class="pt-2 px-3 d-flex justify-content-between align-items-center shadow-sm" style="background-color: #FFFFFF;">
                <?php // navb
                    include 'navb.php'
                ?>
            </div>

            <div class="mt-3 mx-4">

                <h4 class="fw-bold">Delet Students</h4>
                <hr>
                
                <?php
                    include 'connect.php';
                    $id = $_GET['id'];
                    $query = "SELECT * FROM students WHERE id = $id";
                    $result = mysqli_query($connect , $query);
                    $student = mysqli_fetch_assoc($result);

                ?>
                <div class="overflow-auto" style="width: 100%;">
                    <form method="POST" class="w-75 container" action="">
                        <input class="form-control my-3" name="name" value="<?php echo $student['name'];?>" placeholder="Name" type="text" disabled>
                        <input class="form-control my-3" name="email" value="<?php echo $student['email'];?>" placeholder="Email" type="text" disabled>
                        <input class="form-control my-3" name="phone" value="<?php echo $student['phone'];?>" placeholder="Phone" type="text" disabled>
                        <input class="form-control my-3" name="enroll" value="<?php echo $student['enroll'];?>" placeholder="Enroll" type="text" disabled>
                        <input class="form-control my-3" name="date" value="<?php echo $student['date'];?>" placeholder="Date" type="date" disabled>
                    </form>
                    <form method="POST">
                        <div class="d-flex justify-content-evenly">
                            <input class="form-control btn-info my-3 w-25" type="submit" name="yes" value="yes">
                            <input class="form-control btn-info my-3 w-25" type="submit" name="no" value="no" >
                        </div>
                    </form>
                </div>
                <?php
                    if(isset($_POST['yes'])){
                        $query = "DELETE FROM students WHERE id=$id";
                        $result = mysqli_query($connect , $query);
                        echo "
                            <script>
                                window.location.href = 'Students.php';
                            </script>
                        ";
                    }elseif (isset($_POST['no'])){
                        echo "
                            <script>
                                window.location.href = 'Students.php';
                            </script>
                        ";
                    }
                ?>


            </div>
        </div>

    </section>
</body>
</html>