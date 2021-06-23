

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> EDIT student Profile </h6>
    </div>
    <div class="card-body">
    <?php

        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            $connection = mysqli_connect ("localhost" , "root" , "","cms");
            $query = "SELECT * FROM student WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);

            foreach($query_run as $row)
            {
                ?>

                    <form action="studentcode.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control"
                                placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label> Semester </label>
                            <input type="text" name="edit_semester" value="<?php echo $row['semester'] ?>" class="form-control"
                                placeholder="Enter semester">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                                placeholder="Enter Email">
                        </div>
                        

                        <a href="viewstudent1.php" class="btn btn-danger"> CANCEL </a>
                        <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                    </form>
                    <?php
            }
        }
    ?>
    </div>
</div>
</div>

</div>