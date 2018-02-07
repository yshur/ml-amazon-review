<?php
	
	$fileName = '/var/www/ml-amazon-review/Musical_Instruments_5.json';
	$data = file($fileName);
	$item = "";
	$a=$b=$c=$d=$e=0;
	foreach ($data as $line)
	{
		if($i>8000)
			break;

		$review = json_decode($line, true);
		//$item = $review["reviewText"]; 
		$num = $review["overall"]; 

		switch($num)
		{
			case 1:
				$a++;
				break;
			case 2:
				$b++;
				break;
			case 3:
				$c++;
				break;
			case 4:
				$d++;
				break;
			case 5:
				$e++;
				break;

		}	
		$i++;
	}
	echo "1: ".$a."\n";
	echo "2: ".$b."\n";
	echo "3: ".$c."\n";
	echo "4: ".$d."\n";
	echo "5: ".$e."\n";

?>
