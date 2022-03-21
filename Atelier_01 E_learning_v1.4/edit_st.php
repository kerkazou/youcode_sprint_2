
<?php
    if(empty($_POST['edit_st'])){
      echo $id;
      $query = "SELECT * FROM students WHERE id = $id";
      $result = mysqli_query($connect , $query);
      $edit_student = mysqli_fetch_assoc($result);

      $email_edit = $edit_student['email'];
    }
?>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="overflow-auto" style="width: 100%;">
            <form method="POST" class="w-75 container">
                <input class="form-control my-3" name="name" value="<?php echo $edit_student['name'];?>" placeholder="Name" type="text" required>
                <input class="form-control my-3" name="email" value="<?php echo $email_edit ;?>" placeholder="Email" type="text" required>
                <input class="form-control my-3" name="phone" value="<?php echo $edit_student['phone'];?>" placeholder="Phone" type="text" required>
                <input class="form-control my-3" name="enroll" value="<?php echo $edit_student['enroll'];?>" placeholder="Enroll" type="text" required>
                <input class="form-control my-3" name="date" value="<?php echo $edit_student['date'];?>" placeholder="Date" type="date" required>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="save" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<?php
    if (isset($_POST['save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enroll = $_POST['enroll'];
        $date = $_POST['date'];
        $query = "UPDATE students set id=$id , name='$name' , email='$email' , phone='$phone' , enroll='$enroll' , date='$date' WHERE id=$id";
        $edit_student = mysqli_query($connect , $query);
        if (!$edit_student){
            die('error!');
        }
        echo "
            <script>
                window.location.href = 'Students.php';
            </script>
        ";
    }
?>