<?php
	$fileName = 'items_3';
	$data = file($fileName);
	$size = count($data);
	$rates = array("key"=>"","1"=>0, "2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$words_arr = array();
	//var_dump($words_arr);
	for($i=0;$i<$size;$i++)
	{
		$temp = substr($data[$i], 0, -1);
		$rates["key"] = $temp;
		$words_arr[$i] = $rates;
	}
	var_dump($words_arr);
?>
