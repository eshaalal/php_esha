<?php
// Function to find the roots of the quadratic equation
function findRoots($a, $b, $c) {
    // Calculate the discriminant (b^2 - 4ac)
    $discriminant = $b * $b - 4 * $a * $c;

    // Check the nature of the roots
    if ($discriminant > 0) {
        // Two distinct real roots
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "The roots are real and different.<br>";
        echo "Root 1: " . $root1 . "<br>";
        echo "Root 2: " . $root2;
    } elseif ($discriminant == 0) {
        // One real root (both roots are the same)
        $root = -$b / (2 * $a);
        echo "The roots are real and equal.<br>";
        echo "Root: " . $root;
    } else {
        // Complex roots
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(abs($discriminant)) / (2 * $a);
        echo "The roots are complex and different.<br>";
        echo "Root 1: " . $realPart . " + " . $imaginaryPart . "i<br>";
        echo "Root 2: " . $realPart . " - " . $imaginaryPart . "i";
    }
}

// Coefficients of the quadratic equation
$a = 1;
$b = -3;
$c = 2;

// Call the function to find the roots
findRoots($a, $b, $c);
?>
