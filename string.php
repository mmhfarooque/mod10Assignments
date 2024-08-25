<?php

function getVowelCount($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

function processStrings($arr) {
    foreach ($arr as $string) {
        $vowelCount = getVowelCount($string);
        $reversedString = strrev($string);

        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }
}

$strings = ["Hello", "World", "PHP", "Programming"];

processStrings($strings);

