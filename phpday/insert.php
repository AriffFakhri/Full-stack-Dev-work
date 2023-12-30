<?php

// echo "welcome to the database part";





// connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "sam2";


// create a connection

$conn = mysqli_connect($servername, $username, $password );

//die if connection was not connected successfully

if (!$conn){
    die("sorry we failed to connect " . mysqli_connect_error());
}
else {
    echo "Connection was successful";
}
echo "<br>";

// create a database

// $sql = "CREATE DATABASE sam2";
// $result = mysqli_query($conn , $sql);

//check database if create or not

// crate a table in the db

// $sql = "CREATE TABLE `sam2`.`trip` (`sno` INT NOT NULL , `name` VARCHAR(15) NOT NULL , `role` VARCHAR(21) 
// NOT NULL , `trip` VARCHAR(21) NOT NULL ) ENGINE = InnoDB;";

// $result = mysqli_query($conn,$sql);

// variables to be inserted into the table

$name = " jackson";
$destination = "Russia";

$sql ="INSERT INTO `sam2`.`trip` (`name`, `role`, `trip`) VALUES ( '$name', 'teacher', '$destination');";
$result = mysqli_query($conn,$sql);


// add a neww trip to the table
if ($result){
    echo "The record has been inserted successfully";
}else {
    echo "the record was not inserted successfully because of this error ------> " .mysqli_error($conn);
}


?>