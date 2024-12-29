<?php


// -------------------- Arithmetic operators
// + - * / ** %

$x = 10;
$y = 2;
$z = null;

// $z = $x + $y;
// $z = $x - $y;
// $z = $x * $y;
// $z = $x / $y;
// $z = $x ** $y;
$z = $x % $y;
echo $z;
echo"<br>";

// -------------------- Increment/decrement operators
// ++, --

$counter = 0;

// $counter = $counter + 1;
// $counter++;
// $counter--;
// $counter+=2;
$counter-=2;
echo $counter;

// -------------------- Operator Precedence
// In order left from left to right, parentheses first 
// () 
// **
// * / %
// + -

$total = 1 + 2 - 3 * 4 / 5 ** 6;
echo $total;

?>
<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuben's PHP practice - Arithmetic</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<div class="container">
    <ol>
        <li><a href="index.php">Variables &amp; Data Types</a></li>
        <li><a href="arithmetic.php">Arithmetic</a></li>
        <li><a href="getandpost.php">_GET and $_POST</a></li>
        <li><a href="math_functions.php">Math Functions</a></li>
        <li><a href="if_statements.php">If statements</a></li>
    </ol>
    </div>
</body>
</html>