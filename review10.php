<?php
	$fileName = 'items_8';
	$data = file($fileName);
	foreach($data as $line)
	{
		if(substr($line,-4,-2)=="::")
			continue;
		else
			echo $line;
	}

?>
