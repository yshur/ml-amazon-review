<?php
	$fileName = '/var/www/ml-amazon-review/Musical_Instruments_5.json';
	$data = file($fileName);
	$good = "";
	$i = 0;
	foreach ($data as $line)
	{
		$review = json_decode($line, true);
		if($review["overall"]==1)
		{
			$good .= "{$i}-".$review["reviewText"]."\n"; 
			$i++;
		}
	}
	echo $good;
?>
