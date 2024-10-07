<?php
function findRoots($a, $b, $c) {
    $discriminant = $b * $b - 4 * $a * $c;

    if ($discriminant > 0) {
        $root1 = (-$b + sqrt($discriminant)) / (2*$a);
        $root2 = (-$b - sqrt($discriminant)) / (2*$a);
        return "Root 1 = $root1 and Root2 = $root2";
    } elseif ($discriminant == 0) {
        $root = -$b / (2*$a);
        return "Root 1 = $root and Root2 = $root";

    } else {
        $realPart = -$b / (2*$a);
        $imaginary = sqrt(abs($discriminant)) / (2*$a);
        return "Root 1 = $realPart+{$imaginary} and root 2= $realPart-{$imaginary}";
    }
}

$a = 1;
$b = -3;
$c = 2;
echo "Enter a, b, c: $a, $b ,$c";
echo "<br>";  
echo findRoots($a, $b, $c);
?>
