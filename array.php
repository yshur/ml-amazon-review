<?php
	$fileName1 = 'items_3';
	$data1 = file($fileName1);
	$size = count($data1);
	$rates = array();
	//$words_arr = array();
	//var_dump($words_arr);
	for($i=0;$i<$size;$i++)
	{
		$temp = substr($data1[$i], 0, -1);
		$rates[$temp] = 0;
		
	}
	var_dump($rates);
?>
