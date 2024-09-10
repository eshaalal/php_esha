<?php
function invertedFullPyramid($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        // Print leading spaces
        for ($j = 0; $j < $rows - $i; $j++) {
            echo "&nbsp;"; // HTML non-breaking space
        }
        
        // Print stars
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        
        // Move to the next line after each row
        echo "<br>"; // HTML line break
    }
}

// Example usage
$rows = 5; // Number of rows for the inverted full pyramid
invertedFullPyramid($rows);
?>
