<?php

echo "<h1>This is our first day of php</h1>";

// variables
// variable are containers for storing data or information
// Rules to write down the variables in php

/*
always start with $ sign
1.Cannot start with number
2.Must start with letter or an underscore character
3. Can only contain alphanumeric characters and underscores
*/

// $name = "sam";

// echo $name;
// echo "<br>";

// $a = "name of students";
// echo $a;

// echo "<br>";

// $student = "our students are very intelligent";
// echo "today we are learning php and $student";

$name = "john";
$age = "25";
$height = "6";
$student = false;

// display information using variables

echo "<h1> user information </h1>";
echo "<h3>Name: $name </h3>";
echo "<h3>Height: $height </h3>";
echo "<h3> Age: $age </h3>";

if ($student){
    echo "Status:student";
}else {
    echo "Status: Not a student";
}    



?>