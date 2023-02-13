<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
<?php
 function countWords($string)
 {
     $words = explode(' ', $string);
     $wordCount = count($words);
     return $wordCount;
 }

 $inputString = readline('Enter some words: ');

 $wordCount = countWords($inputString);

 echo 'The number of words is: ' . $wordCount;


?>