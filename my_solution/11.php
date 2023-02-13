<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
$numbers = [];

echo 'Please enter numbers separated by spaces: ';

$input = trim(fgets(STDIN));

$numbers = explode(' ', $input);

$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}

$average = $sum / count($numbers);

echo 'The average of the numbers is ' .
    number_format((float) $average, 2, '.', '');


?>
