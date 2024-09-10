<?php
function calculator($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Division by zero error!";
            }
        default:
            return "Invalid operator!";
    }
}

// Example usage
$num1 = 10;
$num2 = 5;
$operator = '+';  // Change the operator for different operations

$result = calculator($num1, $num2, $operator);
echo "Result of $num1 $operator $num2 = " . $result;
?>
