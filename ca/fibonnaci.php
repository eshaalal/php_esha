<?php
// Function to display Fibonacci sequence
function displayFibonacci($terms) {
    $first = 0;
    $second = 1;
    
    // Print the first two terms of the Fibonacci sequence
    echo "Fibonacci Sequence:<br>";
    echo "$first<br>";
    echo "$second<br>";
    
    // Loop to calculate and print the rest of the terms
    for ($i = 3; $i <= $terms; $i++) {
        $next = $first + $second;
        echo "$next<br>";
        
        // Update the values of $first and $second
        $first = $second;
        $second = $next;
    }
}

// Number of terms in the Fibonacci sequence
$numberOfTerms = 10;

// Call the function to display the Fibonacci sequence
displayFibonacci($numberOfTerms);
?>
