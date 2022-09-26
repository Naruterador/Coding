<?php 
header("content-type:text/html;charset=utf-8");
setcookie('token','hello');
show_source(__FILE__);
if ($_COOKIE['token']=='hello'){
  $txt = file_get_contents('flag.php');
  $filename = 'u/'.md5(mt_rand(1,100)).'.txt';
  file_put_contents($filename,$txt);
  sleep(10);
  unlink($filename);
}