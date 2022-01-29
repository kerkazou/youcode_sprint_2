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
<body style="margin: 0px;">
    <section class="d-sm-flex overflow-hidden" style="background-color: #F8F8F8;">

        <div class="col-sm-2 pt-3" style="background-color: #FAFFC1; width: 100%;">
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
                    <div class="d-flex">
                        <div class="d-flex flex-column me-4">
                            <i class="bi bi-caret-up btn btn-sm p-0 text-info"></i>
                            <i class="bi bi-caret-down btn btn-sm p-0 text-info"></i>
                        </div>
                        <a class="btn text-light px-4 btn-info" href="add-student.php" id="add" name="add" style="background-color: #00C1FE;" type="button">ADD NEW STUDENT</a>
                </div>
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
                                $Data = file_get_contents('Students-list.json');
                                $student = json_decode($Data,true);
                                foreach ($student as $key => $student){
                                    echo "<tr>
                                            <tr><td></td></tr>
                                            <td class='bg-white'><img style='width: 50%;' src='student.png' alt=''></td>
                                            <td class='bg-white'>".$student['Name']."</td>
                                            <td class='bg-white'>".$student['Email']."</td>
                                            <td class='bg-white'>".$student['Phone']."</td>
                                            <td class='bg-white'>".$student['Enroll']."</td>
                                            <td class='bg-white'>".$student['Date']."</td>
                                            <td class='bg-white'>
                                                <div class='d-flex justify-content-around'>
                                                    <i class='bi bi-pencil btn text-info'></i>
                                                    <i class='bi bi-trash btn text-info name='Delet''></i>
                                                </div>
                                            </td>
                                        </tr>";
                                }
                                /*
                                    if(isset($student['Delet'])){
                                        $Delet = $_POST['Delet'];
                                        $Data = file_get_contents('Student-list.json');
                                        $Data = json_decode($Data);
                                        unset($Data[$Delet]);
                                        $Data = json_encode($Data);
                                        file_put_contents('Student-list.json', $Data);
                                    }
                                */
                            ?>

                        </tbody>
                    </table>

                </div>


            </div>
        </div>

    </section>
</body>
</html>