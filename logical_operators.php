<?php 

// Logical Operators - Combine conditional statements
// if(conditional && condition2)
// if(conditional || condition 2)
// if(!condition)

// && = True if both conditions are true 
// || = True if at least one condition is true
//  ! = True if false. False if true.



// ------- AND logical operator ------- 

// $temp = 25;

// if($temp >= 0 && $temp <= 30){
//    echo"The weather is good. ";
// }
// else {
//     echo"The weather is bad.";
// }



// ------- OR logical operator ------- 

// $temp = 100;

// if($temp < 0 || $temp > 30){
//     echo"The weather is bad. ";
//  }
//  else {
//      echo"The weather is good.";
//  }



// ------- NOT logical operator ------- 

// $temp = 15;
// $cloudy = false;

// if($temp < 0 || $temp > 30){
//     echo"The weather is bad.<br>";
// }
// else{
//     echo"The weather is good.<br>";
// }

// if(!$cloudy){
// echo"It's sunny.";
// }
// else{
//     echo"It's cloudy.";
// }



// $age = 25;
// $citizen = true;

// // if($age >= 18 && $citizen){
// // echo"You can vote";
// // }
// // else{
// //     echo"You can't vote";
// // }


// if(!$age >= 18 || !$citizen){
//     echo"You can't vote";
//     }
//     else{
//         echo"You can vote";
//     }



// $child = false;
// $senior = false;
// $ticket = null;

// if($child || $senior){
//     $ticket = 10;
// }
// else{
//     $ticket = 15;
// }

// echo"The ticket price is \${$ticket}";
 

?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuben's PHP practice - Logical Operators</title>
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
    </ol>
    </div>

</body>
</html>