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
                    <h4 class="fw-bold">Delet Students</h4>
                    <div class="d-flex">
                        <div class="d-flex flex-column me-4">
                            <i class="bi bi-caret-up btn btn-sm p-0 text-info"></i>
                            <i class="bi bi-caret-down btn btn-sm p-0 text-info"></i>
                        </div>
                        <button class="btn text-light px-4 btn-info" id="add" name="add" style="background-color: #00C1FE;" type="button">ADD NEW STUDENT</button>
                    </div>
                </div>
                <hr>
                <?php
                    $edit_student = [
                        "id" => "",
                        "Name" => "",
                        "Email" => "",
                        "Phone" => "",
                        "Enroll" => "",
                        "Date" => ""
                    ];
                    if (isset($_GET['id'])) {
                        $Data = file_get_contents('students-list.json');
                        $students = json_decode($Data,true);
                        foreach($students as $student){
                            if($student['id'] == $_GET['id']){
                                $edit_student = $student;
                                break;
                            }
                        }
                    }
                ?>

                <div class="overflow-auto" style="width: 100%;">
                    <form method="POST" class="w-75 container" action="">
                        <input class="form-control my-3" name="Name" value="<?php echo $edit_student['Name'];?>" placeholder="Name" type="text" required>
                        <input class="form-control my-3" name="Email" value="<?php echo $edit_student['Email'];?>" placeholder="Email" type="text" required>
                        <input class="form-control my-3" name="Phone" value="<?php echo $edit_student['Phone'];?>" placeholder="Phone" type="text" required>
                        <input class="form-control my-3" name="Enroll" value="<?php echo $edit_student['Enroll'];?>" placeholder="Enroll" type="text" required>
                        <input class="form-control my-3" name="Date" value="<?php echo $edit_student['Date'];?>" placeholder="Date" type="date" required>
                        <div class="d-flex justify-content-evenly">
                            <button class="form-control btn-info my-3 w-25" name="Yes" type="submit">Yes</button>
                            <button class="form-control btn-info my-3 w-25" name="No" type="submit">No</button>
                        </div>
                    </form>
                </div>
                <?php

                    if (isset($_POST['Yes'])) {
                        $data = file_get_contents('Students-list.json');
                        $students = json_decode($data,true);
                        if($student['id'] == $_GET['id']){
                            unset($Data[$students]);
                        }
                        $Data = json_encode($students , JSON_PRETTY_PRINT);
                        file_put_contents('Students-list.json', $Data);
                        echo "
                            <script>
                                window.location.href = 'Students.php';
                            </script>
                        ";
                    }
                    elseif (isset($_POST['No'])){
                        echo "
                            <script>
                                window.location.href = 'Students.php';
                            </script>
                        ";
                    }

                    /*if(!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Phone']) && !empty($_POST['Enroll']) && !empty($_POST['Date'])){
                        $data = file_get_contents('Students-list.json');
                        $students = json_decode($data,true);
                        $edit_student = [
                            "id" => $_POST['id'],
                            "Name" => $_POST['Name'],
                            "Email" => $_POST['Email'],
                            "Phone" => $_POST['Phone'],
                            "Enroll" => $_POST['Enroll'],
                            "Date" => $_POST['Date']
                        ];
                        foreach($students as $key => $student){
                            if($student['id'] == $_GET['id']){
                                $students[$key] = $edit_student;
                                break;
                            }
                        }
                        $Data = json_encode($students , JSON_PRETTY_PRINT);
                        file_put_contents('Students-list.json', $Data);
                        echo "
                            <script>
                                window.location.href = 'Students.php';
                            </script>
                        ";
                    }*/
                ?>


            </div>
        </div>

    </section>
</body>
</html>