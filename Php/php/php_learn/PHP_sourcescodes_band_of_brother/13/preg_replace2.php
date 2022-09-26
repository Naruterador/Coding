<?php
	$pattern="/(\d{2})\/(\d{2})\/(\d{4})/";                            //日期格式的正则表达式
	$text="今年春节放假日期为01/25/2009到02/02/2009共7天。";   	   //带有两个日期格式的字符串
	echo preg_replace($pattern, "\\3-\\1-\\2", $text);                 //将日期替换为以“-”分隔的格式
	echo preg_replace($pattern, "\${3}-\${1}-\${2}",$text);            //将“\\1”改为“\${1}”的形式
?>
