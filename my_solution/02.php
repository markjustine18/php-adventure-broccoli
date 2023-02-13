<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php
$input = readline('Please enter a string: ');

$reverse = strrev($input);

if ($input == $reverse) {
    echo "$input is a palindrome.";
} else {
    echo "$input is not a palindrome.";
}


?>
