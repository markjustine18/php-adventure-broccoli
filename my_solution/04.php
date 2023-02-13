<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
<?php
 $number = readline('Enter a number: ');
 $sum = 0;

 for ($i = 0; $i < strlen($number); $i++) {
     $sum += (int) $number[$i];
 }

 echo 'The sum of the digits is: ' . $sum;


?>