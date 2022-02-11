<?php
    include 'connect.php';
    session_start();
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
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

                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">Courses</h4>
                    <div class="d-flex">
                        <div class="d-flex flex-column me-4">
                            <i class="bi bi-caret-up btn btn-sm p-0 text-info"></i>
                            <i class="bi bi-caret-down btn btn-sm p-0 text-info"></i>
                        </div>
                        <a class="btn text-light px-4 btn-info" href="add-courses.php" style="background-color: #00C1FE;" type="button">ADD NEW COURSES</a>
                </div>
                </div>

                <hr>

                <div class="overflow-auto" style="width: 100%; height:550px">
                    <table class="table table-borderless" style="min-width: 1200px; max-height: 500px;">
                        <thead>
                            <tr class="text-secondary">
                                <td class="col-4">Name of course</td>
                                <td class="col-4">Distributed By</td>
                                <td class="col-2">Date</td>
                                <td class="col-2"></td>
                            </tr>
                        </thead>
                        <tbody style="LINE-HEIGHT:50px">
                            
                            <?php
                                $query = "SELECT * FROM courses";
                                $courses = mysqli_query($connect , $query);
                                if ($courses){
                                    while ($row = mysqli_fetch_assoc($courses)){
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $distributed = $row['distributed'];
                                        $date = $row['date'];

                                        echo '<tr>
                                                <tr><td></td></tr>
                                                <td class="bg-white">'.$name.'</td>
                                                <td class="bg-white">'.$distributed.'</td>
                                                <td class="bg-white">'.$date.'</td>
                                                <td class="bg-white">
                                                    <div class="d-flex justify-content-around">
                                                        <a href="edit-courses.php?id='.$id.'"><i class="bi bi-pencil btn text-info"></i></a>
                                                        <a href="delet-courses.php?id='.$id.'" name="delet_student"><i class="bi bi-trash btn text-info"></i></a>
                                                    </div>
                                                </td>
                                            </tr>';
                                    }
                                }
                            ?>


                        </tbody>
                    </table>

                </div>


            </div>
        </div>

    </section>
</body>
</html>