<?php 
echo"Welcome to Reuben's PHP practice page <br>";

// Variable - A reusable container that holds data - string, integer, float, boolean
// Notes for Variables and Data Types on my notion account

$name = "Reuben Dawe";
$food = "raw meat";
$email = "reubenemerica@gmail.com";

// Integers (Whole numbers)

$age = 26;
$users = 2;
$quantity = 4;

// Floats (Numbers that contain a decimal portion)

$gpa = 2.5;
$price = 9.99;
$tax_rate = 5.1;

// Booleans (True or false)

$employed = true;
$online = false;
$for_sale = true;

// Null - Undefined

$total = null;

// Echo

echo "Hello, my name is {$name} <br>";
echo"I love eating {$food} <br>";
echo"My email address is {$email} <br>";

echo"I am {$age} years old<br>";
echo"There are {$users} users online<br>";
echo"You would like to buy {$quantity} items<br>";

echo"Your GPA is: {$gpa}<br>";
echo"Your ribeye steak is \${$price}<br>";
echo"The income tax rate is {$tax_rate}%<br>";

echo"Online status: {$online}<br>";

echo"You have ordered {$quantity} x {$food} packages<br>";
$total = $quantity * $price;
echo"Your total is: \${$total}";
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuben's PHP practice - Variables and Data Types</title>
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
        <li><a href="logical_operators.php">Logical Operators</a></li>
        <li><a href="switches.php">Switches</a></li>
        <li><a href="for_loops.php">For Loops</a></li>
    </ol>
    </div>

</body>
</html>