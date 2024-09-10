<?php
// Function to swap two elements using call by reference
function swap(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

// Initialize two variables
$a = 10;
$b = 20;

echo "Before swapping: a = $a, b = $b<br>";

// Call the swap function
swap($a, $b);

echo "After swapping: a = $a, b = $b";
?>
