<?php
// Get the age of the person from user input
$age = $_GET["age"];

// Check if the age is greater than or equal to 18
if ($age >= 18) {
    // If yes, display a message that the person is eligible to vote
    echo "You are eligible to vote.";
} else {
    // If no, display a message that the person is not eligible to vote
    echo "You are not eligible to vote.";
}
?>
