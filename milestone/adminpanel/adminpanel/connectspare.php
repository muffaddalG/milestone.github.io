<?php

$con = mysqli_connect("localhost","root","","car");

if(isset($_POST['submit']))
{
    $partname = $_POST['partname'];
    $partprice = $_POST['partprice'];
  
    $querry = "INSERT INTO spareparts (partname,partprice) VALUES ('$partname','$partprice')";
    $querry_run = mysqli_query($con, $querry);

}