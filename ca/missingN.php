<?php
    // PHP code to find missing elements

    function not_present($list)
    {
        // Create an array with range from array 
        // minimum to maximum.
        $new_array = range(min($list), max($list));

        // Find those elements that are present
        // in new_array but not in given list
        return array_diff($new_array, $list);
    }

    // Driver code
    $missing = not_present(array(1, 2, 5, 6, 3, 8));
    
    // Use print_r to display array contents
    print_r($missing);
?>
