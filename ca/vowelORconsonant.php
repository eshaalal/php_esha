<?php
// Function to check if the character is a vowel or consonant
function checkVowelOrConsonant($char) {
    // Convert the character to lowercase for case-insensitive comparison
    $char = strtolower($char);

    // Check if the character is a vowel
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        return $char ." is a Vowel.";
    } else {
        return "$char is a Consonant.";
    }
}

// Input character
$char = 'B';

// Call the function and display the result
echo checkVowelOrConsonant($char);
?>
