<?php

$con = mysqli_connect("localhost","root","","car");

if(isset($_POST['submit']))
{

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $carname = $_POST['carname'];
    $carmodelwithyear = $_POST['carmodelwithyear'];
    $kmsdriven = $_POST['kmsdriven'];
    $knownissues = $_POST['knownissues'];
    $address = $_POST['address'];
    $datetime = $_POST['datetime'];

    $querry = "INSERT INTO serviceorder (email,phone,carname,carmodelwithyear,kmsdriven,knownissues,address,datetime) VALUES ('$email','$phone','$carname','$carmodelwithyear','$kmsdriven','$knownissues','$address','$datetime')";
    $querry_run = mysqli_query($con, $querry);

}