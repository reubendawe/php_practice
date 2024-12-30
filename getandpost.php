<?php


?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuben's PHP practice - Get and Post variables</title>
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

    <div class="container">
    <form action="getandpost.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <br>
        <input type="submit" value="Log in">
    </form>
    </div>
    <br>

   <?php

   echo "{$_POST["username"]} <br>";
   echo "{$_POST["password"]}";

   //$_GET = Data is appended to the URL
   //        NOT SECURE
   //        char limit
   //        Bookmark is possible w/ values
   //        GET requests can be cached
   //        Better for a search page

   //$_POST = Data is packed inside the body of the HTML
   //         MORE SECURE
   //         No data limit
   //         Cannot bookmark
   //         GET requests are not cached
   //         Better for submitting credentials

   ?>

   <div class="container">
       <form action="getandpost.php" method="post">
           <label>Quantity: </label><br>
           <input type="text" name="quantity">
           <input type="submit" value="total">
       </form>
   </div>
   <br>

   <?php

//    $item = "steak";
//    $price = 7.99;
//    $quantity = $_POST["quantity"];
//    $total = "null";

//    $total = "$quantity" * $price;

//    echo"You have ordered {$quantity} x {$item}s <br>";
//    echo"Your total is \${$total}";

   ?>

</body>
</html>