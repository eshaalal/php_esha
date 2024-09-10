<?php
function pyramid($row){
    for($i=1;$i<=$row;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
}
$row=5;
pyramid($row);

?>