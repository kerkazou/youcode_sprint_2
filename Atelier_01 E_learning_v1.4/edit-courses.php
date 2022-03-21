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

                <h4 class="fw-bold">Edit Students</h4>
                <hr>

                <?php
                    include 'connect.php';
                    $id = $_GET['id'];
                    $query = "SELECT * FROM courses WHERE id = $id";
                    $result = mysqli_query($connect , $query);
                    $edit_courses = mysqli_fetch_assoc($result);
                ?>

                <div class="overflow-auto" style="width: 100%;">
                    <form method="POST" class="w-75 container" action="">
                        <input class="form-control my-3" name="name" value="<?php echo $edit_courses['name'];?>" placeholder="Name of course" type="text" required>
                        <input class="form-control my-3" name="distributed" value="<?php echo $edit_courses['distributed'];?>" placeholder="Distributed By" type="text" required>
                        <input class="form-control my-3" name="date" value="<?php echo $edit_courses['date'];?>" placeholder="Date" type="date" required>
                        <button class="form-control btn-info my-3" name="save" type="submit">Submit<i class="bi bi-telegram"></i></button>
                    </form>
                </div>
                <?php
                    if (isset($_POST['save'])){
                        $name = $_POST['name'];
                        $distributed = $_POST['distributed'];
                        $date = $_POST['date'];
                        $query = "UPDATE courses set id=$id , name='$name' , distributed='$distributed' , date='$date' WHERE id=$id";
                        $edit_courses = mysqli_query($connect , $query);
                        if (!$edit_courses){
                            die('error!');
                        }
                        echo "
                            <script>
                                window.location.href = 'courses.php';
                            </script>
                        ";
                    }
                ?>


            </div>
        </div>

    </section>
</body>
</html>