<?php
function isAlphabet($char){
    if($char>='A' && $char<='Z' || $char>='a' && $char<='z'){
        return true;
    }
    else return false;
}
$char='1';
if(isAlphabet($char)){
    echo "yes it is an albhabet";
}
else{
    echo "No, not an alphabet";
}





?>