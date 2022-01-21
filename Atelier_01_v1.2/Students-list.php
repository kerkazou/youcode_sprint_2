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

    <div class="d-flex justify-content-between align-items-center">
        <h4 class="fw-bold">Students List</h4>
        <div class="d-flex">
            <div class="d-flex flex-column btn btn-sm me-2">
                <i class="bi bi-caret-up p-0 text-info"></i>
                <i class="bi bi-caret-down p-0 text-info"></i>
            </div>
            <button class="btn text-light px-4 btn-info" style="background-color: #00C1FE;" type="button">ADD NEW STUDENT</button>
        </div>
    </div>
    <hr>
    <div class="overflow-auto" style="width: 100%;">
        <table class="table table-borderless table-striped" style="min-width: 1200px;">
            <thead>
                <tr class="text-secondary" style="LINE-HEIGHT:50px">
                    <td class="col-1">img</td>
                    <td class="col-2">Name</td>
                    <td class="col-2">Email</td>
                    <td class="col-2">Phone</td>
                    <td class="col-2">Enroll Number</td>
                    <td class="col-2">Date of admissin</td>
                    <td class="col-1">icon</td>
                </tr>
            </thead>
            <tbody style="LINE-HEIGHT:50px">

                <?php
                    $payement = [
                        array(
                            'img'=>'<img style="width: 50%;" src="student.png" alt="">' ,
                            'Name'=> 'username' ,
                            'Email'=>'user@email.com' ,
                            'Phone'=>'7305477760' ,
                            'Enroll'=>'1234567305477760' ,
                            'Date'=>'08-Dec, 2021' ,
                            'icon'=>'<div class="d-flex justify-content-around ">
                                        <i class="bi bi-pencil btn text-info"></i>
                                        <i class="bi bi-trash btn text-info"></i>
                                    </div>'
                            ),
                            array(
                                'img'=>'<img style="width: 50%;" src="student.png" alt="">' ,
                                'Name'=> 'username' ,
                                'Email'=>'user@email.com' ,
                                'Phone'=>'7305477760' ,
                                'Enroll'=>'1234567305477760' ,
                                'Date'=>'08-Dec, 2021' ,
                                'icon'=>'<div class="d-flex justify-content-around ">
                                            <i class="bi bi-pencil btn text-info"></i>
                                            <i class="bi bi-trash btn text-info"></i>
                                        </div>'
                                ),
                                array(
                                    'img'=>'<img style="width: 50%;" src="student.png" alt="">' ,
                                    'Name'=> 'username' ,
                                    'Email'=>'user@email.com' ,
                                    'Phone'=>'7305477760' ,
                                    'Enroll'=>'1234567305477760' ,
                                    'Date'=>'08-Dec, 2021' ,
                                    'icon'=>'<div class="d-flex justify-content-around ">
                                                <i class="bi bi-pencil btn text-info"></i>
                                                <i class="bi bi-trash btn text-info"></i>
                                            </div>'
                                    ),
                                    array(
                                        'img'=>'<img style="width: 50%;" src="student.png" alt="">' ,
                                        'Name'=> 'username' ,
                                        'Email'=>'user@email.com' ,
                                        'Phone'=>'7305477760' ,
                                        'Enroll'=>'1234567305477760' ,
                                        'Date'=>'08-Dec, 2021' ,
                                        'icon'=>'<div class="d-flex justify-content-around ">
                                                    <i class="bi bi-pencil btn text-info"></i>
                                                    <i class="bi bi-trash btn text-info"></i>
                                                </div>'
                                        ),
                                        array(
                                            'img'=>'<img style="width: 50%;" src="student.png" alt="">' ,
                                            'Name'=> 'username' ,
                                            'Email'=>'user@email.com' ,
                                            'Phone'=>'7305477760' ,
                                            'Enroll'=>'1234567305477760' ,
                                            'Date'=>'08-Dec, 2021' ,
                                            'icon'=>'<div class="d-flex justify-content-around ">
                                                        <i class="bi bi-pencil btn text-info"></i>
                                                        <i class="bi bi-trash btn text-info"></i>
                                                    </div>'
                                            ),
                                            array(
                                                'img'=>'<img style="width: 50%;" src="student.png" alt="">' ,
                                                'Name'=> 'username' ,
                                                'Email'=>'user@email.com' ,
                                                'Phone'=>'7305477760' ,
                                                'Enroll'=>'1234567305477760' ,
                                                'Date'=>'08-Dec, 2021' ,
                                                'icon'=>'<div class="d-flex justify-content-around ">
                                                            <i class="bi bi-pencil btn text-info"></i>
                                                            <i class="bi bi-trash btn text-info"></i>
                                                        </div>'
                                                ),
                                                array(
                                                    'img'=>'<img style="width: 50%;" src="student.png" alt="">' ,
                                                    'Name'=> 'username' ,
                                                    'Email'=>'user@email.com' ,
                                                    'Phone'=>'7305477760' ,
                                                    'Enroll'=>'1234567305477760' ,
                                                    'Date'=>'08-Dec, 2021' ,
                                                    'icon'=>'<div class="d-flex justify-content-around ">
                                                                <i class="bi bi-pencil btn text-info"></i>
                                                                <i class="bi bi-trash btn text-info"></i>
                                                            </div>'
                                                    ),
                    ];
                    foreach ($payement as $key => $payement){
                        echo "<tr>
                                <td>".$payement['img']."</td>
                                <td>".$payement['Name']."</td>
                                <td>".$payement['Email']."</td>
                                <td>".$payement['Phone']."</td>
                                <td>".$payement['Enroll']."</td>
                                <td>".$payement['Date']."</td>
                                <td>".$payement['icon']."</td>
                            </tr>";
                    }
                ?>

            </tbody>
        </table>

    </div>


</body>
</html>