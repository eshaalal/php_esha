<?php
$host="localhost";
$use="root";
$pass="";
$db="demo";

$con = mysqli_connect($host,$use,$pass,$db);
if($con){
    echo"connected";
}
else{
    echo"not connected";
}

?>