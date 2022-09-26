<?php
$file=fopen('./output.txt',"r");

header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Content-Length:".filesize('./output.txt'));					
header("Content-Disposition: attachment; filename=test.txt");    //Setting download name

echo fread($file,filesize('./output.txt'));
fclose($file);


/*

推荐第二种


因为第一种方法只能下载浏览器不能解析的文件，比如rar啊，脚本文件之类。如果文件是图片或者txt文档，就会直接在浏览器中打开


而第二种方法是直接输出的文件流，不存在上述问题


你可以检查一下你传值过来的路径是否正确，还有，流输出后面不要再进行任何操作了


 */




?>