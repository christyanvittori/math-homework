<?php
// Assuming you have a variable 'input' that is an array or another type of data.
$input = array(1, 2.5, "hello", true, [0, 1, 2]); // Example data

// Randomly select and display some elements from the array.
$selected = $input[rand(0, count($input) - 1)];
echo "Selected element: " . $selected;
