<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
<?php
 $n = readline('Enter a number: ');

 $counter = 0;

 $triangularNumber = 0;

 for ($counter = 0; $counter < $n; $counter++) {
     $triangularNumber += $counter + 1;

     echo "$triangularNumber\n";
 }

?>