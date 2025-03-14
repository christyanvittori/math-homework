
<?php
$number = rand(1, 10);
$operation = rand(1, 2) ? "+" : "-";
$answer = $number;
if ($operation == "+") {
    $answer += rand(1, 5);
} else {
    $answer -= rand(1, 5);
}
echo "What is $number $operation 5?\n";
echo "$answer";
?>