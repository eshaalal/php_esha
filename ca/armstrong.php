<?php
function check($num1){

    $temp=$num1;
    $rem='';
    $sum=0;
    $len=strlen($num1);
    while($num1>0){
        $rem=$num1%10;
        $sum+=pow($rem,$len);
        $num1=(int)($num1/10);
    }
    return $temp==$sum;

}
function armStrong($num1,$num2){

    for($i=$num1;$i<=$num2;$i++){
        if(check($i)){
            echo "$i <br>";
        }
    }
}
armStrong(100,200);

?>