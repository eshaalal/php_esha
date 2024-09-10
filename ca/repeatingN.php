<?php
function printNonRepeatedElements($arr) {
    $n = count($arr); // Get the number of elements in the array
    
    // Loop through the array
    for ($i = 0; $i < $n; $i++) {
        $isRepeated = false;
        
        // Check if the current element is repeated in the array
        for ($j = 0; $j < $n; $j++) {
            if ($i != $j && $arr[$i] == $arr[$j]) {
                $isRepeated = true;
                break; // No need to check further if already found
            }
        }
        
        // If the element is not repeated, print it
        if (!$isRepeated) {
            echo $arr[$i] . " ";
        }
    }
}

// Example usage
$array = array(4, 5, 6, 7, 4, 5, 8, 9);
echo "Non-repeated elements: ";
printNonRepeatedElements($array);
?>
