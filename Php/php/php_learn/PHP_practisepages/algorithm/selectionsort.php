<?php

function selectionsort($array = array())
{

	$index = 0;
	$temp = 0;

	for($i = 0;$i < count($array) - 1;$i++)
	{
		$index = $i;
		for($j = $i + 1;$j < count($array);$j++)
			if($array[$index] > $array[$j])
				$index = $j;

		$temp = $array[$index];
		$array[$index] = $array[$i];
		$array[$i] = $temp;
	}

	return $array;
}

$array1  = array(9,6,3,1,10,8,2,100);

print_r($array1);

echo '</br>';

print_r(selectionsort($array1));





















?>