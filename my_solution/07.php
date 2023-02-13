<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
<?php
 $input = readline('Please enter some words: ');

 $array = explode(' ', $input);

 $longest = 0;

 for ($i = 0; $i < count($array); $i++) {
     $length = strlen($array[$i]);
     if ($length > $longest) {
         $longest = $length;
         $longestString = $array[$i];
     }
 }

 echo 'The longest string in the array is: ' . $longestString . "\n";


?>