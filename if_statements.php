<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuben's PHP practice - If Statements</title>
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
    </ol>
    </div>

</body>
</html>

<?php

// If statement - If some condition is true, do something
//                If condition is false, don't do it

// $age = 101;

// if($age >= 100) {
//     echo "You are too old to enter this site";
// }
// elseif ($age >= 18){
//     echo "You may enter this site";
// }
// elseif($age <= 0) {
//     echo "That wasn't a valid age";
// }
// else{
//     echo "You must be 18+ enter";
// }



// $adult = true;

// if($adult){
//     echo"You may enter this site";
// }
// else{
//     echo "You must be an adult to enter";
// }



$hours = 50;
$rate = 15;
$weekly_pay = null;

if($hours <= 0) {
   $weekly_pay = 0;
}
elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
}
else{
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}

echo "You made \${$weekly_pay} this week";

?>