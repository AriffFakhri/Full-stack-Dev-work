<?php
// echo "Switch case";

// $age = 12;

// switch($age){
//     case 12: 
//     echo "You are 12 years old <br>";
//     break;
//     case 30;
//     echo "You are 30 years old <br>";
//     break;
//     case 38;
//     echo "You are 67 years old <br>";
//     break;
    
//     default;
//     echo "You are off limit <br>";
// }

$dayOfWeek = "Blue";

switch ($dayOfWeek){
 case "Monday";
 case "Tuesday";
 case "Wednesday";
 case "Thursday";
 case "Friday";
 echo "It's a weekday <br>";
 break;

 case "Saturday";
 case "Sunday";
 echo "It's weekend <br>";
 break;

 default;
 echo "Not a day";
}



?>