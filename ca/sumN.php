<?php
function findSum($n){
    $i=0;
    $sum=0;
    while($i<=$n){
        $sum+=$i;
        $i++;
    }
    return $sum;
}

$n=8;
echo findSum($n);


?>