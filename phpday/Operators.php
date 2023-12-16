<?php
echo "This is our operators in php";
echo "<br>";

/*
    operators php
    1. Arithmetic operator
    2. Assignment operator
    3. Comparison operator
    4. Logical operator



*/
$a = 5;
$b = 2;

// arithmetic operator

echo "For a + b , the result is " . ($a + $b);
echo "<br>";
echo "For a - b , the result is " . ($a - $b);
echo "<br>";
echo "For a * b , the result is " . ($a * $b);
echo "<br>";
echo "For a / b , the result is " . ($a / $b);
echo "<br>";
echo "For a % b , the result is " . ($a % $b);

// Assignment operator
echo "<br>";
$x = $a;
echo "for x the value is " . $x;

echo "<br>";
$a += 6;
echo "for x the value is " .$a;

echo "<br>";
$a -= 3;
echo "for x the value is " .$a;

echo "<br>";
$a *= 3;
echo "for x the value is " .$a;

echo "<br>";
$a /= 3;
echo "for x the value is " .$a;

// comparison operator

echo "<br>";

$b = 78;
$y = 78;

echo var_dump($b > $y);
echo "<br>";
echo var_dump($b >= $y);
echo "<br>";
echo var_dump($b > $y);
echo "<br>";
echo var_dump($b <> $y);
echo "<br>";


// Logical operator

$m = true;
$n = false;

echo var_dump( $m and $n);
echo "<br>";
echo var_dump( $m && $n);
echo "<br>";
echo var_dump( $m or $n);
echo "<br>";
echo var_dump( $m || $n);
echo "<br>";
echo var_dump( !$m);

?>