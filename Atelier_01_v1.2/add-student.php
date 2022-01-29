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
                    <h4 class="fw-bold">Add Students</h4>
                    <div class="d-flex">
                        <div class="d-flex flex-column me-4">
                            <i class="bi bi-caret-up btn btn-sm p-0 text-info"></i>
                            <i class="bi bi-caret-down btn btn-sm p-0 text-info"></i>
                        </div>
                        <button class="btn text-light px-4 btn-info" id="add" name="add" style="background-color: #00C1FE;" type="button">ADD NEW STUDENT</button>
                </div>
                </div>

                <hr>

                <div class="overflow-auto" style="width: 100%;">
                    <form method="POST" class="w-75 container" action="">
                            <input class="form-control my-3" name="img" type="file" accept="image/png, image/jpeg" controls="image">
                            <input class="form-control my-3" name="Name" placeholder="Name" type="text">
                            <input class="form-control my-3" name="Email" placeholder="Email" type="text">
                            <input class="form-control my-3" name="Phone" placeholder="Phone" type="text">
                            <input class="form-control my-3" name="Enroll" placeholder="Enroll" type="text">
                            <input class="form-control my-3" name="Date" placeholder="Date" type="text">
                            <button class="form-control btn-info my-3" type="submit" name="Add">Submit<i class="bi bi-telegram"></i></button>
                    </form>
                </div>
                <?php
                    if(isset($_POST['Add'])){
                        $Data = file_get_contents('Students-list.json');
                        $Data = json_decode($Data);
                
                        $array = array(
                            'Name' => $_POST['Name'],
                            'Email' => $_POST['Email'],
                            'Phone' => $_POST['Phone'],
                            'Enroll' => $_POST['Enroll'],
                            'Date' => $_POST['Date']
                        );
                
                        $Data[] = $array;
                        $Data = json_encode($Data);
                        file_put_contents('Students-list.json', $Data);
                    }
                ?>


            </div>
        </div>

    </section>
</body>
</html>