<?php

	//$fileName1 = 'items_3';
	//$data1 = file($fileName1);
	//$size = count($data1);
	$rates = array();
	//$words_arr = array();
	//var_dump($words_arr);
	//for($i=0;$i<$size;$i++)
	//{
//		$temp = substr($data1[$i], 0, -1);
	//	$rates[$temp] = 0;
		
//	}
	
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
				$rates[$word] = 0;
			if($num>4)
				$rates[$word]++;
			else
				$rates[$word]--;
		}	
		$i++;
	}
	foreach ($rates as $key => $value)
	{
			echo $key.": ".$value."\n";

	}

?>
