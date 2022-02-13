<h4 class="container fw-bold border-start border-5 border-info ms-4">E-classe</h4>
    <div>
        <div class="text-center mt-sm-5 pt-3">
            <img src="youcode.png" class="rounded-circle mb-3 col-sm-6" alt="img-user">
            <h5 class="fw-bold fs-6">
                <?php
                    if(isset($_SESSION['email'])){
                        echo $_SESSION['username'];
                    }else{
                        header("location:index.php");
                    }
                ?>
            </h5>
            <h6 class="text-info">Admin</h6>
        </div>
        <ul class="nav nav-pills d-flex flex-sm-column justify-content-center mt-sm-5 w-50 w-sm-50 mx-auto">
            <li class=""><a class="ps-0 w-sm-50 text-dark btn btn-outline-primary border-0 <?php if(basename($_SERVER['REQUEST_URI'])=='Dashboard.php') echo'bg-info'; ?>" href="Dashboard.php"><i class="bi bi-house-door mx-3"></i><span class="d-none d-sm-inline">Home</span></a></li>
            <li><a class="ps-0 text-dark btn btn-outline-primary border-0 my-sm-2 <?php if(basename($_SERVER['REQUEST_URI'])=='courses.php') echo'bg-info'; ?>" href="courses.php"><i class="bi bi-bookmark mx-3"></i><span class="d-none d-sm-inline">Course</span></a></li>
            <li><a class="ps-0 text-dark btn btn-outline-primary border-0 <?php if(basename($_SERVER['REQUEST_URI'])=='Students.php') echo'bg-info'; ?> " href="Students.php"><i class="bi bi-mortarboard mx-3"></i><span class="d-none d-sm-inline">Students</span></a></li>
            <li><a class="ps-0 text-dark btn btn-outline-primary border-0 my-sm-2 <?php if(basename($_SERVER['REQUEST_URI'])=='Payemet.php') echo'bg-info'; ?> " href="Payemet.php"><i class="bi bi-currency-dollar mx-3"></i><span class="d-none d-sm-inline">Payment</span></a></li>
            <li><a class="ps-0 text-dark btn btn-outline-primary border-0" href="#"><i class="bi bi-file-earmark-bar-graph mx-3"></i><span class="d-none d-sm-inline">Report</span></a></li>
            <li><a class="ps-0 text-dark btn btn-outline-primary border-0 mb-2 my-sm-2" href="#"><i class="bi bi-sliders mx-3"></i><span class="d-none d-sm-inline">Settings</span></a></li>
            <li><a class="ps-0 text-dark btn btn-outline-primary border-0 mt-sm-5 mb-3" href="deconn_session.php"><span class="d-none d-sm-inline">Logout</span><i class="bi bi-box-arrow-right ms-4"></i></a></li>
        </ul>
    </div>