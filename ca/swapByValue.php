<?php
// Function to swap two values by value
function swapByValue($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    
    return [$a, $b];
}

// Variables to be swapped
$x = 5;
$y = 10;

// Perform the swap
list($x, $y) = swapByValue($x, $y);

echo "After swapping by value:<br>";
echo "x = $x<br>";
echo "y = $y<br>";
?>
