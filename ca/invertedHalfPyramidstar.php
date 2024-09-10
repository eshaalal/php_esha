<?php
    function pyramid($row){
        for($i=$row;$i>=1;$i--){
            for($j=0;$j<$i;$j++){
                echo "*";
            }
            echo "<br>";
        }
    }
    $row=5;
    pyramid($row);

?>