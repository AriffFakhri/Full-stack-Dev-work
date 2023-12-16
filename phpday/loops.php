<?php

// echo "Loops in php"

/*
loops in php
1.For loop
2.while loop
3. do while loop
4. foreach loop



*/

// for loop

// for ($i = 1; $i <6; $i++){
//     echo $i;
// }

// while loop

// $i = 0;
// while ($i<5){
//     echo " the value i is";
//     echo +1 ++;
// }

// do while loop

// $i = 0;

// do{
//     echo "$i";
//     $i++;

// }while($i <99);

//for each loop
// this loop is used ti iterate over elements in an array or other iterable objects.

// $arr = array ("sora " , "razman " , "aaron " , "ariff ");
// // for ($i = 0; $i <count($arr); $i++){
// //     echo $arr[$i];
// //     echo "<br>";
// // };

// // better way to do this
// foreach ($arr as $value){
//     echo "$value";
//     echo "<br>";
// }

$dayOfWeek = "Saturday";

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