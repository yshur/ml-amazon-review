<?php
	$fileName = 'ml-amazon-review/Musical_Instruments_5.json';
	$host= 'reviewerID';
	$scriptName = 'reviewerName';
	$cmd = "grep $host.*.$scriptName $fileName|tail -1";
	exec($cmd,$outJson);
	$outArray = json_decode($outJson[0],true);	
	echo $outArray['reviewText']."\n";
	echo $outArray['overall']."\n";
?>