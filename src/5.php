
<?php
// Generate a random number between 1 and 10
$randomNumber = mt_rand(1, 10);

// Ask the user to guess the number
echo "Guess a number between 1 and 10: ";
$userInput = trim(fgets(STDIN));

// Check if the user's input is equal to the random number
if ($randomNumber == $userInput) {
    echo "You got it right! The number was $randomNumber.";
} else {
    echo "Sorry, that's not correct. The number was $randomNumber.";
}
?>