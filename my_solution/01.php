<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<?php
$input = readline('Enter a character: ');

$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

if (in_array($input, $vowels)) {
    echo $input . ' is a vowel.';
} else {
    echo $input . ' is a consonant.';
}


?>
