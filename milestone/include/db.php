<?php

   $server   =  "sql111.epizy.com";
   $username =  "epiz_28946781";
   $password =  "LDhtlyhC8hB2";
   $dbname   =  "epiz_28946781_milestoneofficial";


   $conn = mysqli_connect($server,$username,$password,$dbname);

   if(!$conn){
       die("connection failed:".mysqli_connect_error());
   }

   ?>