<?php
// echo "welcome to our local and global var"

$a = 98; /* global variable */
echo "<br>";
$b = 9;

function printvalue() {
    $a = 97;  /*local variable */
    $b = 100;
    global $a , $b; /* give me the access to the global variable */ 
    echo "the value of our var is a of $a b is $b";
}
// echo $a;
// echo $b;

printvalue();

?>