<?php
/* sum of the squares */
$a = 0;

for($i = 1; $i <= 100; $i++) {
	$a = $a + ($i * $i);
}

/* square of the sum */
$b = 0;

for($i = 1; $i <= 100; $i++) {
	$b = $b + $i;
}

/* work out the difference */
$b = ($b * $b);

$answer = $b - $a;

echo $answer;

/* 25164150 */
?>