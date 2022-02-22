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
    <title>Dashboard</title>
</head>
<body>
    
    <section class="d-sm-flex overflow-hidden">
    
        <div class="col-sm-2 pt-3" style="background-color: #FAFFC1;">
            <?php // sidebar
                include 'sidebar.php'
            ?>
        </div>

        <div class="col-sm-10 mb-5">

            <div class="pt-2 px-3 d-flex justify-content-between shadow-sm" style="background-color: #FFFFFF;">
                <?php // navb
                    include 'navb.php'
                ?>
            </div>

            <div class="row mt-5 mx-3">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="h-100 px-2 py-3" style="background-color: #F0F9FF; border-radius: 8px;">
                        <h1><i class="bi bi-mortarboard" style="color: #74C1ED;"></i></h1>
                        <p>Students</p>
                        <h3 class="float-end">
                            <?php
                                $query = "SELECT * FROM students";
                                $query_run = mysqli_query($connect,$query);
                                $row = mysqli_num_rows($query_run);
                                echo $row ;
                            ?>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="h-100 px-2 py-3" style="background-color: #FEF6FB; border-radius: 8px;">
                        <h1><i class="bi bi-bookmark" style="color: #EE95C5;"></i></h1>
                        <p>Course</p>
                        <h3 class="float-end">
                            <?php
                                $query = "SELECT * FROM courses";
                                $query_run = mysqli_query($connect,$query);
                                $row = mysqli_num_rows($query_run);
                                echo $row ;
                            ?>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="h-100 px-2 py-4" style="background-color: #FEFBEC; border-radius: 8px;">
                        <h3><i class="bi bi-currency-dollar" style="color: #00C1FE; border: 3px solid #00C1FE;"></i></h3>
                        <p>Payments</p>
                        <div class="d-lg-flex align-items-center float-end">
                            <h6>DHS</h6><h3>
                                <?php
                                    $query = "SELECT * FROM payment";
                                    $result = mysqli_query($connect , $query);
                                    $sum_payment = 0;
                                    if ($result){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $payment = $row['amount'];
                                            $sum_payment = $payment + $sum_payment;
                                        }
                                    }
                                    echo $sum_payment;
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 mb-3">
                    <div class="h-100 px-2 py-3" style="background-image: linear-gradient(120deg,#00C1FE,#FAFFC1); border-radius: 8px;">
                        <h1><i class="bi bi-person text-light"></i></h1>
                        <p class="text-light">User</p>
                        <h3 class="float-end">
                        <?php
                            $query = "SELECT * FROM students";
                            $query_run = mysqli_query($connect,$query);
                            $row = mysqli_num_rows($query_run);
                            echo $row ;
                        ?>
                        </h3>
                    </div>
                </div>

            </div>
        </div>

    </section>
</body>
</html>