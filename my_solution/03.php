<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php
$input = readline('Enter a character: ');
$characters = str_split($input);
$frequencies = [];

foreach ($characters as $character) {
    if (array_key_exists($character, $frequencies)) {
        $frequencies[$character]++;
    } else {
        $frequencies[$character] = 1;
    }
}

foreach ($frequencies as $character => $frequency) {
    echo "$character: $frequency\n";
}


?>
