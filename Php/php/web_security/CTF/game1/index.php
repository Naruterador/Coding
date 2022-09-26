<?php
header("content-type:text/html;charset=utf-8");
show_source(__FILE__);
echo '<pre>';
include('u/ip.php');
include('flag.php');
if (in_array($_SERVER['REMOTE_ADDR'],$ip)){
  die("您的ip已进入系统黑名单");
}
var_dump($ip);

if ($_POST[substr($flag,5,3)]=='attack'){
  echo $flag;
}else if (count($_POST)>0){
  $ip = 'array_push($ip,"'.$_SERVER['REMOTE_ADDR'].'");'.PHP_EOL;
  file_put_contents('u/ip.php',$ip,FILE_APPEND);
}
echo '</pre>';
	