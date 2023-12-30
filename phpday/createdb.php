<?php

// echo "welcome to the database part";





// connecting to the database

$servername = "localhost";
$username = "root";
$password = "";

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

$sql = "CREATE DATABASE sam2";
$result = mysqli_query($conn , $sql);

//check database if create or not

if ($result){
    echo "The db created successfully";
}else {
    echo "the db was not created successfully ------>" .mysqli_error($conn);
}


?>