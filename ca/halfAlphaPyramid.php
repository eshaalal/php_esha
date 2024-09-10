<?php
// Number of rows for the pyramid
$rows = 5;

// ASCII value of 'A'
$alphabet = 65;

for ($i = 1; $i <= $rows; $i++) {
    // Loop to print the alphabets in each row
    for ($j = 1; $j <= $i; $j++) {
        // Print the corresponding alphabet
        echo chr($alphabet) . " ";
    }
    // Move to the next alphabet
    $alphabet++;
    
    // Print new line after each row
    echo "<br>";
}
?>
