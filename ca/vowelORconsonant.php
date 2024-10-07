<?php
function checkVowelOrConsonant($char) {
    $char = strtolower($char);

    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        return "$char is a Vowel.";
    } else {
        return "$char is a Consonant.";
    }
}

$char = 'b';
echo "Enter character: $char";
echo "<br>";
echo checkVowelOrConsonant($char);
?>  
