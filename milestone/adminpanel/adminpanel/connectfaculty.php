<?php

$con = mysqli_connect("localhost","root","","cms");

if(isset($_POST['submit']))
{
    
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
   

    $querry = "INSERT INTO faculty (firstname,lastname,subject,phoneno,email,address) VALUES ('$firstname','$lastname','$subject','$phoneno','$email','$address')";
  $querry_run = mysqli_query($con, $querry);

}