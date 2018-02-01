<?php

	$rates = array();
	
	$fileName = '/var/www/ml-amazon-review/Musical_Instruments_5.json';
	$data = file($fileName);
	$item = "";
	$i=0;
	foreach ($data as $line)
	{
		if($i>4000)
			break;

		$review = json_decode($line, true);
		$item = $review["reviewText"]; 
		$num = $review["overall"]; 

		$items = preg_split("/[\s,.]+/", $item);
		foreach ($items as $word)
		{
			if(!$rates[$word])
				$rates[$word] = array();
			if(!$rates[$word][$num])
				$rates[$word][$num]=1;
			else
				$rates[$word][$num]++;
		}	
		$i++;
	}
	foreach ($rates as $key => $value)
	{
		echo $key.":: ";
		foreach($value as $key1 => $value1)
			echo "$key1: $value1,";
		echo "\n";
	}

?>
