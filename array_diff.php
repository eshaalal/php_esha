<!-- <?php

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$b=array("e"=>"pink","f"=>"purple","g"=>"orange");

$result=array_merge($a,$b);
print_r($result);
?> -->

<?php

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $b=array("e"=>"pink","f"=>"purple","g"=>"orange");

$result=array_flip($a);
print_r($result);
?>