<?php
// Get the number from user input
$number = $_GET["number"];

// Check if the number is less than 2
if ($number < 2) {
    // If yes, display a message that the number is not prime
    echo "$number is not a prime number.";
} else {
    // If no, assume the number is prime and set a flag variable to true
    $is_prime = true;

    // Loop from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        // Check if the number is divisible by i
        if ($number % $i == 0) {
            // If yes, set the flag variable to false and break the loop
            $is_prime = false;
            break;
        }
    }

    // Check the value of the flag variable
    if ($is_prime) {
        // If true, display a message that the number is prime
        echo "$number is a prime number.";
    } else {
        // If false, display a message that the number is not prime
        echo "$number is not a prime number.";
    }
}
?>
