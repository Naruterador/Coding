<?php

	$data = array(5,8,1,7,2);  //声明一个数组$data, 存放5个整数元素

	sort($data);               //使用sort()函数将数组$data中的元素值按照由小到大顺序进行排序
	print_r($data);            //输出：Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 7 [4] => 8 )

	rsort($data);              //使用rsort()函数将数组$data按照由大到小的顺序对元素的值进行排序
	print_r($data);            //输出：Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 2 [4] => 1 )
	
?>
