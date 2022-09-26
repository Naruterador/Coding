<?php

function bubble($array = array())
{	
	$temp = 0;

	for($i = 0;$i < count($array) - 1;$i++)
		for($j = 0;$j < count($array)- $i - 1;$j++)
			if($array[$j] > $array[$j+1])
			{
				$temp = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $temp;
			}
	return $array;
}

$array1 = array(9,6,3,1,10,-8,2,100);

print_r($array1);

echo '</br>';

print_r(bubble($array1));













?>