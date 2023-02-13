<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
<?php
 $input = readline('Enter an array of numbers separated by spaces: ');

 $numbers = explode(' ', $input);

 $sum = 0;

 foreach ($numbers as $number) {
     $sum += $number;
 }

 echo "The sum of the numbers is $sum.";


?>