<?php
	$fileName = '/var/www/ml-amazon-review/Musical_Instruments_5.json';
	$data = file($fileName);
	$item = "";

	foreach ($data as $line)
	{

		$review = json_decode($line, true);
		$item .= $review["reviewText"]."\n"; 
	}
	echo $item;
?>
