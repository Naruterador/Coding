<?php

function insertionsort($array = array())
{

	$temp = 0;

	for($i = 1;$i < count($array);$i++)
		for($j = 0;$j < $i;$j++)
			if($array[$j] > $array[$i])
			{
				$temp = $array[$j];
				$array[$j] = $array[$i];
				$array[$i] = $temp;
			}

	return $array;
}

$array1  = array(9,6,3,1,10,8,2,100);

print_r($array1);

echo '</br>';

print_r(insertionsort($array1));














?>