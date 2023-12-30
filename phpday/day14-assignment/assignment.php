<?php
// connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "sam2";

$conn = mysqli_connect($servername, $username, $password );

//die if connection was not connected successfully

if (!$conn){
    die("sorry we failed to connect " . mysqli_connect_error());
}
else {
    echo "Connection was successful";
}
echo "<br>";

$sql = "INSERT INTO `users` (`ID`, `First name`, `Last name`, `Email`, `Address`, `password`) VALUES (NULL, 'sam', 'amin', 'akaa@gmail.com', ' Kantin Yayasan Pelajaran Mara Jln Tandok', '21332sdsds');";

?>