<?php
function invertedHalfPyramid($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        // Print numbers for the current row
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        // Move to the next line after each row
        echo "<br>";
    }
}

// Example usage
$rows = 5; // Number of rows for the inverted half pyramid
invertedHalfPyramid($rows);
?>
