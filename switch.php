<?php

// A switch is a replacement to using many 'elseif' statements
// It's more efficient and less code to write

$grade = "D";

switch($grade) {
    case "A":
        echo "You did great!";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did OK";
        break;
    case "D":
        echo "You did poorly";
        break;
    case "E":
        echo "You failed";
        break;
    default: 
        echo "'{$grade}' is not valid";
}

?>