<?php
    function A1($x){
        switch($x){
            case 1:
                if($x==1)
                echo 'Case 1 was executed.';
                break;
            case 2:
                if($x==2)
                echo 'Case 2 was executed.';
                break;
            case 3:
                    if($x==3)
                    echo 'Case 3 was executed.';
                    break;
            case 4:
                        if($x==4)
                        echo 'Case 4 was executed.';
                        break;
            default:
             echo 'Default was exec';
             break;
        }
    }
    A1(9);
?>