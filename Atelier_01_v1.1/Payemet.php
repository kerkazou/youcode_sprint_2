<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Payement</title>
</head>
<body>
    <section class="d-sm-flex" style="background-color: #F8F8F8;">

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
                <?php // navb
                    include 'Payment-detai.php'
                ?>
            </div>

        </div>

    </section>
</body>
</html>