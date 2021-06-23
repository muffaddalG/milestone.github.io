<?php

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $firstname = $_POST['edit_firstname'];
    $lastname = $_POST['edit_lastname'];
    $email = $_POST['edit_email'];
   
    
    $connection = mysqli_connect ("localhost" , "root" , "","cms");
    $query = "UPDATE faculty SET firstname='$firstname',lastname='$lastname', email='$email'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location:viewfaculty.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location:viewfaculty.php'); 
    }
}

?>