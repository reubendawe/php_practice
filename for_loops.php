<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuben's PHP practice - For Loops</title>
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

    <div class="container">
        <form action="for_loops.php" method="post">
            <label>Enter a number to count to:</label>
            <input type="text" name="counter">
            <input type="submit" value="start">
        </form>
    </div>

    <div class="container">
        <form action="for_loops.php" method="post">
            <label>Enter a number to count down from</label>
            <input type="text" name="counter-down">
            <input type="submit" value="start">
        </form>
    </div>

</body>
</html>

<?php

// For loop = Repeats same code a certain number of times

$counter = $_POST["counter"];

for($i = 1;$i <= $counter; $i++){
  echo $i . "<br>";
}

?>

<?php

// For loop = Repeats same code a certain number of times

$counter = $_POST["counter-down"];

for($i = $counter;$i > 0; $i--){
  echo $i . "<br>";
}

?>

<?php





// For loop - Repeats some code a certain number of times
// $i stands for 'index'

// for($i = 2;$i <= 100;$i+=2){
// //    echo"Hello <br>";
// echo $i . "<br>";
// }



// To decrement...


// for($i = 10;$i > 0;$i--){
//     //    echo"Hello <br>";
//     echo $i . "<br>";
//     }

?> 