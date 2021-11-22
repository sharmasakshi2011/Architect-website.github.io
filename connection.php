<?php
//Database connection
$servername = "localhost";
$Username = "root";
$password = "";
$conn = mysqli_connect($servername,$Username,$password);

// Creating Database
if($conn){
    $sql = "CREATE DATABASE DB";
    mysqli_query($conn,$sql);
    $sql1 = "USE DB";
    mysqli_query($conn,$sql1);
    $sql2 = "CREATE TABLE `registration` ( `NAME` VARCHAR(30) NOT NULL ,
     `CONTACT_NO` VARCHAR(10) NOT NULL , 
     `ADDRESS` VARCHAR(40) NOT NULL , 
     `PASSWORD` VARCHAR(15) NOT NULL ,
     PRIMARY KEY (`NAME`),
     UNIQUE (`CONTACT_NO`))
    ";
    mysqli_query($conn,$sql2);
}
else{
    die("connection failed :".mysqli_connect_error());
}
?>