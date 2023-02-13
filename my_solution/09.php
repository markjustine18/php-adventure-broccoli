<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
<?php
 $inputString = readline('Please enter a words: ');

 $outputString = removeVowels($inputString);

 echo $outputString;

 function removeVowels($string)
 {
     $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
     $string = str_replace($vowels, '', $string);
     return $string;
 }


?>