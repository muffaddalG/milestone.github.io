<?php

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $semester = $_POST['edit_semester'];
    $email = $_POST['edit_email'];
   
    
    $connection = mysqli_connect ("localhost" , "root" , "","cms");
    $query = "UPDATE student SET name='$name',semester='$semester', email='$email'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location:viewstudent1.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location:viewstudent1.php'); 
    }
}

?>