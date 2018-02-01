<?php
	$fileName = 'words';
	$data = file($fileName);
	//var_dump($data);
	for($i=1;$i<101;$i++)
	{
		$items = preg_split("/[\s,.]+/", $data[$i]);
		//var_dump($items);
		foreach ($items as $item)
		{
			echo $item."\n";

		}
	}

?>
