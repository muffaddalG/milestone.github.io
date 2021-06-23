<?php

$con = mysqli_connect("localhost","root","","car");

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $address= $_POST['address'];

    $querry = "INSERT INTO user (username,firstname,lastname,password,email,contactno,address) VALUES ('$username','$firstname','$lastname','$password','$email','$contactno','$address')";
    $querry_run = mysqli_query($con, $querry);

}