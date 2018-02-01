<?php
	$fileName = 'items_2';
	$data = file($fileName);
	$size = count($data);
	for($i=0;$i<$size;$i++)
	{

		while(0==(strcmp($data[$i],$data[$i+2])))
			$i+=2;
		
		echo $data[$i];

	}



?>
