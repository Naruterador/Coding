<?php
	for($i = 9; $i >= 1; $i-- ) {         //在外层for语句中将初使化条件设置为大值，增量设置为递减
		for($j = $i; $j >=1; $j--) {  //在内层for语句中将初使化条件也设置为大值，增量也设置为递减
			echo "$j x $i = ".$j*$i."&nbsp;&nbsp;";
		}
		echo "<br>";
	}	
?>

