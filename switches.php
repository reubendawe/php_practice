<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuben's PHP practice - Switches</title>
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

<?php

// Switch - Replacement to using many elseif statements
// More efficient, less code to write

// Here's an example...

// $grade = "A";

// if($grade == "A"){
//     echo"You did great!";
// } 
// elseif($grade == "B"){
//     echo"You did good";
// } 
// elseif($grade == "C"){
//     echo"You did okay";
// } 
// elseif($grade == "D"){
//     echo"You did poorly";
// } 
// elseif($grade == "F"){
//     echo"You failed";
// }
// else{
//     echo"{$grade} is not a valid grade";
// }

// Writing all of the above is inefficient, so use 'Switch'

$grade = "A";

switch($grade){
   case "A":
    echo"You did great!<br>";
    break;
   case "B":
    echo"You did good<br>";
    break;
   case "C":
    echo"You did okay<br>";
    break;
   case "D":
    echo"You did poorly<br>";
    break;
   case "F":
    echo"You failed<br>";
    break;
   default:
    echo"{$grade} is not valid <br>";
}



// Here's another example...



$date = date("l");

$date = "Saturday";

switch($date){
   case "Monday":
    echo"I hate Mondays<br>";
    break;
   case "Tuesday":
    echo"It is Taco Tuesday<br>";
    break;
   case "Wednesday":
    echo"It is hump day<br>";
    break;
   case "Thursday":
    echo"It is fish and chips day<br>";
    break;
   case "Friday":
    echo"The weekend is here!<br>";
    break;
   case "Saturday":
    echo"The Shabbat is here<br>";
    break;
   case "Sunday":
    echo"It's the first day of the week<br>";
    break;
   default:
    echo"{$date} is not a valid day of the week<br>";
}

?>