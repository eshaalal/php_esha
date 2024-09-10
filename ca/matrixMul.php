<?php
function matrixMultiplication($matrix1, $matrix2) {
    $rowsMatrix1 = count($matrix1);        // Number of rows in the first matrix
    $colsMatrix1 = count($matrix1[0]);     // Number of columns in the first matrix
    $rowsMatrix2 = count($matrix2);        // Number of rows in the second matrix
    $colsMatrix2 = count($matrix2[0]);     // Number of columns in the second matrix

    // Result matrix with all elements initialized to 0
    $result = array();
    for ($i = 0; $i < $rowsMatrix1; $i++) {
        for ($j = 0; $j < $colsMatrix2; $j++) {
            $result[$i][$j] = 0;
        }
    }

    // Perform matrix multiplication
    for ($i = 0; $i < $rowsMatrix1; $i++) {
        for ($j = 0; $j < $colsMatrix2; $j++) {
            for ($k = 0; $k < $colsMatrix1; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }

    return $result;
}

// Example matrices
$matrix1 = [
    [1, 2],
    [3, 4],
    [5, 6]
];

$matrix2 = [
    [7, 8, 9],
    [10, 11, 12]
];

// Check if the matrices can be multiplied
if (count($matrix1[0]) == count($matrix2)) {
    $result = matrixMultiplication($matrix1, $matrix2);

    // Display the result matrix
    echo "Matrix Multiplication Result:";
    echo "<br>";
    foreach ($result as $row) {
        echo implode(" ", $row) . "<br>";
    }
} else {
    echo "Matrix multiplication is not possible. Number of columns in matrix1 should match number of rows in matrix2.\n";
}
?>
