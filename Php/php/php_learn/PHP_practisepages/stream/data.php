<?php
//data:// — 数据（RFC 2397）

// 打印 "I love PHP"
//echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=');




$fp   = fopen('data://text/plain;base64,', 'r');
$meta = stream_get_meta_data($fp);

// 打印 "text/plain"
echo $meta['mediatype'];




?>