<?php
//phar:// — PHP 归档


$context = stream_context_create(array('phar' =>
                                    array('compress' => Phar::GZ)),
                                    array('metadata' => array('user' => 'cellog')));



file_put_contents('phar://my.phar/test.php',0,$context);






/*
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n"."Cookie: foo=bar\r\n"));


$context = stream_context_create($opts);

 Sends an http request to www.example.com
   with additional headers shown above 
$fp = fopen('http://www.baidu.com', 'r', false, $context);
fpassthru($fp);
fclose($fp);
*/




?>