<?php
// Function to print lowercase alphabets
function printLowercaseAlphabets() {
    echo "Lowercase Alphabets:<br>";
    
    // Loop through ASCII values for lowercase letters (97 to 122)
    for ($i = 97; $i <= 122; $i++) {
        echo chr($i) . " ";
    }
    echo "<br><br>"; // Add space between the two sections
}

// Function to print uppercase alphabets
function printUppercaseAlphabets() {
    echo "Uppercase Alphabets:<br>";
    
    // Loop through ASCII values for uppercase letters (65 to 90)
    for ($i = 65; $i <= 90; $i++) {
        echo chr($i) . " ";
    }
}

// Call the functions to print both lowercase and uppercase alphabets
printLowercaseAlphabets();
printUppercaseAlphabets();
?>
