<?php
function copyString($original){
    $len = strlen($original);
    $copied = '';
    
    for ($i = 0; $i < $len; $i++) {
        $copied = $copied . $original[$i];
    }
    
    return $copied;
}

$string = "esha";
$copy = copyString($string);

echo $string . "<br>";   // Use <br> for a line break in HTML
echo $copy;
?>
