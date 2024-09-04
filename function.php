<?php
function TV($string){
    echo"my fav TV show is ".$string;
    function b(){
        echo "I am here to spoil the code";
        echo "<br>";
    }
}
function b(){
    echo "i am here to spoil the code";
    echo "<br>";
}
b();
TV("sherlock");
?>