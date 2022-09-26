<?php
$flag = '111118761';
if (isset($_POST[substr($flag,5,3)])){
	$_POST[substr($flag,5,3)] = 'attack';
}else{
	$key = array_keys($_POST);
	$num = substr($flag,5,3);
	if (empty($key)){
		exit; 
	}else{
		if ($key[0] != $num){
			$_POST[substr($flag,5,3)] = 'attack1';
		}

	}
		}







