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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Payement</title>
</head>
<body>
    <section class="d-sm-flex overflow-hidden" style="background-color: #F8F8F8;">

        <div class="col-sm-2 pt-3" style="background-color: #FAFFC1;">
            <?php // sidebar
                include 'sidebar.php'
            ?>
        </div>

        <div class="col-sm-10 mb-5">

            <div class="pt-2 px-3 d-flex justify-content-between align-items-center shadow-sm" style="background-color: #FFFFFF;">
                <?php // navb
                    include 'navb.php'
                ?>
            </div>


            <div class="mt-3 mx-4">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold">Payment Details</h4>
                        <form method="POST" class="d-flex">
                            <div class="d-flex flex-column btn btn-sm">
                                <i class="bi bi-caret-up p-0 text-info"></i>
                                <i class="bi bi-caret-down p-0 text-info"></i>
                            </div>
                            <button type="button" class="btn text-light px-4 btn-info" style="background-color: #00C1FE;" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW PATEMENT</button>
                            <?php
                                include 'add-payment.php'
                            ?>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="overflow-auto" style="width: 100%;">
                    <table class="table table-borderless table-striped" style="min-width: 1200px;">
                        <thead>
                            <tr class="text-secondary">
                                <th class="fw-normal h6">Name</th>
                                <th class="fw-normal h6">Payment Schedule</th>
                                <th class="fw-normal h6">Bill Number</th>
                                <th class="fw-normal h6">Amount Paid</th>
                                <th class="fw-normal h6">Balance Amount</th>
                                <th class="fw-normal h6">Date</th>
                                <th class="fw-normal h6"></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            include 'connect.php';
                            $query = "SELECT * FROM payment";
                            $payments = mysqli_query($connect , $query);
                            if ($payments){
                                while ($row = mysqli_fetch_assoc($payments)){
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $payment = $row['payment'];
                                    $bill = $row['bill'];
                                    $amount = $row['amount'];
                                    $balance = $row['balance'];
                                    $date = $row['date'];

                                    echo '<tr>
                                            <td>'.$name.'</td>
                                            <td>'.$payment.'</td>
                                            <td>'.$bill.'</td>
                                            <td>'.$amount.'</td>
                                            <td>'.$balance.'</td>
                                            <td>'.$date.'</td>
                                            <td><td><i class="bi bi-eye btn btn-sm text-info"></i></td>  
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