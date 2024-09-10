<?php
function determinant2x2($matrix) {
    if (count($matrix) == 2 && count($matrix[0]) == 2) {
        $a = $matrix[0][0];
        $b = $matrix[0][1];
        $c = $matrix[1][0];
        $d = $matrix[1][1];
        
        return ($a * $d) - ($b * $c);
    } else {
        return "Invalid matrix size. Must be 2x2.";
    }
}

// Example usage
$matrix2x2 = [
    [1, 2],
    [3, 4]
];

echo "Determinant of 2x2 matrix: " . determinant2x2($matrix2x2);
?>
