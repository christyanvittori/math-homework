<?php
// Math Homework Assignments
$assignment = array(
    '1 + 1', // Addition
    '2 - 1', // Subtraction
    '5 x 2', // Multiplication
    '10 / 2', // Division
    '8 % 3', // Modulus
);
$randomAssignment = $assignment[array_rand($assignment)];
echo "$randomAssignment";
?>