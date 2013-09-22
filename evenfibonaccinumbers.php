<?php
$num = array();

$num[1] = 1;
$num[2] = 2;

/* Count all of the Fibonacci numbers */
for($a = 3; $a < 1000; $a++) {
	
	$b = $num[$a - 1] + $num[$a - 2];

	if($b < 4000000) {
		$num[$a] = $b;
	} else {
		break;
	}

}

$total = 0;

/* Check if they are even */
foreach($num as $c) {

	if($c % 2 == 0) {
		$total = $total + $c;
	}

}

echo $total;

/* 4613732 */
?>