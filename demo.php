<?php
// Odd or Even
$num = readline("Enter a number: ");

// Optimzed if-else
$result = "Even";

if ($num % 2 != 0) {
    $result = "Odd";
}
echo "The number is: $result";