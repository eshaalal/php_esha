<?php

// Function to convert Decimanl number to
// Binary Number
function decimalToBinary($decNum) {
	$binNum = '';
	while ($decNum > 0) {
		$rem = $decNum % 2;
		$binNum = $rem . $binNum;
		$decNum = (int)($decNum / 2);
	}
	return $binNum ;
}

$decNum = 25;

$binNum = decimalToBinary($decNum);

echo "Binary Number: " . $binNum;

?>

