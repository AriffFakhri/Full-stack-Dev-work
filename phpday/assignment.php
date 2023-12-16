<?php
/* task 1*/
$name = "ariff";
$age =  "21";
$city = "Pahang";

echo "My name is $name, I am $age years old, and I live in $city.";



/* task 2*/
echo "<br>";
$grade = "89";

if ($grade >= 90) {
    echo "Excellent!";
} elseif ($grade >= 80 && $grade <= 89) {
    echo "Good job!";
} elseif ($grade >= 70 && $grade <= 79) {
    echo "Keep it up!";
} else {
    echo "Needs improvement";
}
echo "<br>";

/* task 3*/


for ($a = 1; $a <= 10; $a++) {
 echo $a . "<br>";
}
$favoriteFruits = ["jambu", "durian", "mango", "Grapes"];
foreach ($favoriteFruits as $fruit) {
 echo $fruit . "<br>";
}
?>

/* task 4*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <form action="/phpday/assignment.php" method ="POST"> 
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit" value="Submit">


    </form>

<?php
if ($_SERVER ['REQUEST_METHOD'] == 'POST'){

    $name = $_POST ['name'];
    $age = $_POST ['age'];
    echo "My name is $name, I am $age years old.";
}

?>

</body>
</html>


<?php
/* task 5*/
<?php
$a = 87;
$b =70;
function calculateSum(){
   
 
}
echo "<h1>The sum of a + b is </h1>" .($a + $b);
?>
?>












/* task 5*/

?>

