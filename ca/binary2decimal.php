<?php 

function binToDec($binNum) { 
	$decNum = 0; 
	$len = strlen($binNum); 
	
	for ($i = 0; $i < $len; $i++) { 
		$decNum += (int)$binNum[$i] * pow(2, $len - $i - 1); 
	} 
	
	return $decNum; 
} 

$binNum = '110010'; 
$decNum = binToDec($binNum); 

echo "Decimal Number: " . $decNum; 

?> 
