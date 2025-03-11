  <?php

// Define an array of operators
$operators = ['+', '-', '*', '/'];

// Generate a random operator from the array
$operator = $operators[array_rand($operators)];

// Generate two random numbers between 1 and 10
$num1 = rand(1, 10);
$num2 = rand(1, 10);

// Use the operator to calculate the result
if ($operator == '+') {
    $result = $num1 + $num2;
} else if ($operator == '-') {
    $result = $num1 - $num2;
} else if ($operator == '*') {
    $result = $num1 * $num2;
} else if ($operator == '/') {
    $result = $num1 / $num2;
}

// Output the problem and answer
echo "$num1 $operator $num2 = ";
echo "$result";
?>