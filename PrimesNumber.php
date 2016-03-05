<?php

for($i = 2; $i <= 1000; $i++)
{
	$prime = true;
	for($aux = 2; $aux < $i; $aux++)
	{
		if($i % $aux == 0) 
		{
			$prime = false;
			break;
		}
	}
	if($prime) echo $i . " ";
}