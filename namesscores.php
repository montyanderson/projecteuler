<?php
/* Get the file and read it into an array */
$file = file_get_contents("http://projecteuler.net/project/names.txt");
$explode = explode(",", $file);

$names = array();

for($a = 1; $a < count($explode); $a++) {
	$names[$a] = str_replace('"', "", $explode[$a]);
}

/* Sort it into alphabetical order */
$alphabetical = $names;
sort($alphabetical);

for($b = 1; $b < count($alphabetical); $b++) {

	$word = $alphabetical[$b];

	$wval = 0;

	for($c = 1; $c < strlen($word); $c++) {
		$letter = $word[$c];

		$lval = str_replace("a", 1,  $letter);
		$lval = str_replace("b", 2,  $letter);
		$lval = str_replace("c", 3,  $letter);
		$lval = str_replace("d", 4,  $letter);
		$lval = str_replace("e", 5,  $letter);
		$lval = str_replace("f", 6,  $letter);
		$lval = str_replace("g", 7,  $letter);
		$lval = str_replace("h", 8,  $letter);
		$lval = str_replace("i", 9,  $letter);
		$lval = str_replace("j", 10, $letter);
		$lval = str_replace("k", 11, $letter);
		$lval = str_replace("l", 12, $letter);
		$lval = str_replace("m", 13, $letter);
		$lval = str_replace("n", 14, $letter);
		$lval = str_replace("o", 15, $letter);
		$lval = str_replace("p", 16, $letter);
		$lval = str_replace("q", 17, $letter);
		$lval = str_replace("r", 18, $letter);
		$lval = str_replace("s", 19, $letter);
		$lval = str_replace("t", 20, $letter);
		$lval = str_replace("u", 21, $letter);
		$lval = str_replace("v", 22, $letter);
		$lval = str_replace("w", 23, $letter);
		$lval = str_replace("x", 24, $letter);
		$lval = str_replace("y", 25, $letter);
		$lval = str_replace("z", 26, $letter);

		$wval = $wval + $lval;
	}

	echo $wval."<br>";

	//Strange answer here...
	//Not sure what to do...


}


//echo var_dump($alphabetical);

?>