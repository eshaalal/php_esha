<?php
// Function to find the frequency of a character
function findFrequency($str, $char) {
    // Initialize frequency counter
    $count = 0;

    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        // If the current character matches the target character
        if ($str[$i] == $char) {
            $count++;
        }
    }

    return $count;
}

// Input string
$string = "hello world";

// Character to find the frequency of
$character = 'o';

// Call the function and display the result
echo "The frequency of '" . $character . "' in the string is: " . findFrequency($string, $character);
?>
