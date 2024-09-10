<?php
// Function to check if a number is prime
function isPrime($num) {
    // Numbers less than 2 are not prime
    if ($num < 2) {
        return false;
    }

    // Check for factors from 2 to sqrt($num)
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

// Function to print prime numbers between two integers
function printPrimes($start, $end) {
    echo "Prime numbers between $start and $end are:<br>";

    // Iterate through the range and check for prime numbers
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo "$i<br>";
        }
    }
}

// Define the range
$start = 10;
$end = 50;

// Call the function to print prime numbers within the range
printPrimes($start, $end);
?>
