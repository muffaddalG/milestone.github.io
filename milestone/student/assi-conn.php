<?php

$con = mysqli_connect("localhost","root","","cms");

if(isset($_POST['submit']))
{
   
    $studentname = $_POST['studentname'];
    $enrollment = $_POST['enrollment'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $status = $_POST['status'];

    $querry = "INSERT INTO assignment (studentname,enrollment,course,semester,status) VALUES ('$studentname','$enrollment','$course','$semester','$status')";
    $querry_run = mysqli_query($con, $querry);

}