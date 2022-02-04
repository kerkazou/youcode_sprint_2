<?php
    include 'connect.php';
    if (isset($_POST['add'])){
        $name = $_POST['name'];
        $distributed = $_POST['distributed'];
        $date = $_POST['date'];
        $query = "INSERT INTO courses (name,distributed,date) value ('$name','$distributed','$date')";
        $courses = mysqli_query($connect , $query);
        if (!$courses){
            die('error!');
        }
        echo "
            <script>
                window.location.href = 'courses.php';
            </script>
        ";
    }
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

                <h4 class="fw-bold">Add Courses</h4>
                <hr>

                <div class="overflow-auto" style="width: 100%;">
                    <form method="POST" class="w-75 container" action="">
                        <input class="form-control my-3" name="name" placeholder="Name" type="text" required>
                        <input class="form-control my-3" name="distributed" placeholder="Distributed By" type="text" required>
                        <input class="form-control my-3" name="date" placeholder="Date" type="date" required>
                        <button class="form-control btn-info my-3" type="submit" name="add">Submit<i class="bi bi-telegram"></i></button>
                    </form>
                </div>
            </div>
        </div>

    </section>
</body>
</html>