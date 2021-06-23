<?php

$con = mysqli_connect("localhost","root","","cms");
if(isset($_POST['submit']))
{
   
    $name = $_POST['name'];
    $course = $_POST['course'];
	$semester = $_POST['semester'];
	$email = $_POST['email'];
	$phoneno = $_POST['phoneno'];
	$address = $_POST['address'];
    
    
    $querry = "INSERT INTO student (name,course,semester,email,phoneno,address) VALUES ('$name','$course','$semester','$email','$phoneno','$address')";
    $querry_run = mysqli_query($con,$querry);

}



?>