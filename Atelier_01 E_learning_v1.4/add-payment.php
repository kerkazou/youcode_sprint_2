
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div>
            <form method="POST" class="w-75 container" action="">
                <input class="form-control my-3" name="name" placeholder="Name" type="text" required>
                <input class="form-control my-3" name="payment" placeholder="Payment Schedule" type="text" required>
                <input class="form-control my-3" name="bill" placeholder="Bill Number" type="text" required>
                <input class="form-control my-3" name="amount" placeholder="Amount Paid" type="text" required>
                <input class="form-control my-3" name="balance" placeholder="Balance Amount" type="text" required>
                <input class="form-control my-3" name="date" placeholder="Date" type="date" required>
            </form>
        </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="add" class="btn btn-primary">Submit<i class="bi bi-telegram"></i></button>
        </div>
    </div>
</div>

<?php
    include 'connect.php';
    if(!isset($_COOKIE['email']) && !isset($_COOKIE['password'])){
        header("location:index.php");
    }else{}
    if (isset($_POST['add'])){
        $name = $_POST['name'];
        $payment = $_POST['payment'];
        $bill = $_POST['bill'];
        $amount = $_POST['amount'];
        $balance = $_POST['balance'];
        $date = $_POST['date'];
        $query = "INSERT INTO payment (name,payment,bill,amount,balance,date) value ('$name','$payment','$bill','$amount','$balance','$date')";
        $payment = mysqli_query($connect , $query);
        if (!$payment){
            die('error!');
        }
        echo "
            <script>
                window.location.href = 'Payemet.php';
            </script>
        ";
    }
?>