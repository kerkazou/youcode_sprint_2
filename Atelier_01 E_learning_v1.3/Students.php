<?php
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
                    <h4 class="fw-bold">Students List</h4>
                    <form method="POST" class="d-flex">
                        <div class="d-flex flex-column me-4">
                            <i name="up" class="bi bi-caret-up btn btn-sm p-0 text-info"></i>
                            <i name="down" class="bi bi-caret-down btn btn-sm p-0 text-info"></i>
                        </div>
                        <a class="btn text-light px-4 btn-info" href="add-student.php" style="background-color: #00C1FE;" type="button">ADD NEW STUDENT</a>
                    </form>
                </div>

                <hr>

                <div class="overflow-auto" style="width: 100%; height:550px">
                    <table class="table table-borderless" style="min-width: 1200px; max-height: 500px;">
                        <thead>
                            <tr class="text-secondary">
                                <td class="col-1"></td>
                                <td class="col-2">Name</td>
                                <td class="col-2">Email</td>
                                <td class="col-2">Phone</td>
                                <td class="col-2">Enroll Number</td>
                                <td class="col-2">Date of admissin</td>
                                <td class="col-1"></td>
                            </tr>
                        </thead>
                        <tbody style="LINE-HEIGHT:50px">
                            
                            <?php
                                include 'connect.php';
                                $query = "SELECT * FROM students ORDER BY `id` DESC";
                                $student = mysqli_query($connect , $query);

                                if ($student){
                                    while ($row = mysqli_fetch_assoc($student)){
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $phone = $row['phone'];
                                        $enroll = $row['enroll'];
                                        $date = $row['date'];
                                        
                                        echo '<tr>
                                                <tr><td></td></tr>
                                                <td class="bg-white"><img style="width: 50%;" src="student.png" alt=""></td>
                                                <td class="bg-white">'.$name.'</td>
                                                <td class="bg-white">'.$email.'</td>
                                                <td class="bg-white">'.$phone.'</td>
                                                <td class="bg-white">'.$enroll.'</td>
                                                <td class="bg-white">'.$date.'</td>
                                                <td class="bg-white">
                                                    <div class="d-flex justify-content-around">
                                                        <a href="edit-student.php?id='.$id.'"><i class="bi bi-pencil btn text-info"></i></a>
                                                        <a href="delet-student.php?id='.$id.'" name="delet_student"><i class="bi bi-trash btn text-info"></i></a>
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