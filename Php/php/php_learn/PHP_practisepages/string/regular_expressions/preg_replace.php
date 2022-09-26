<?php
/*
	$subject = "12,34:56:784:35,67:897:65";
	$pattern = "/[,:;]/";

	echo preg_replace($pattern,"#",$subject);






	$string = 'April 15, 2003';
	$pattern = '/(\w+) (\d+), (\d+)/i';
	$replacement = '${1}1,$3';
	echo preg_replace($pattern, $replacement, $string);
*/


$time = date ("Y-m-d H:i:s");

$pattern = "/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/i";

$replacement = "\$time格式为：$0<BR>替换后的格式为：\\1年\\2月\\3日 \\4时\\5分\\6秒";

print preg_replace($pattern, $replacement, $time);
if(preg_match($pattern,$time,$arr)){
echo "<pre>";
print_r($arr);
echo "</pre>";
}





?>