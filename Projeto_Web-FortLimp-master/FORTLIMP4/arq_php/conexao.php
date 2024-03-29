<?php
 $servername = "localhost";
 $database = "bd_fortlimp";
 $username = "root";
 $password = "";

 $con = mysqli_connect($servername, $database, $username, $password);

 if(!$con){
    die("connection failed: ".mysqli_connect_error());
 }
echo "connected sucessfully";
mysqli_close($con);
?>