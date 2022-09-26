<?php
/*
date_default_timezone_set('UTC');
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo date("Y-M-d-H-i-s", mktime(15, 10, 30, 1, 2, 98));
echo date('j',mktime(0,0,0,date('n'),date('j'),date('Y')));
echo $start_week_day = date('m-y',mktime(0,0,0,0,1,2019));
*/

//$ip = '192.168.10.1';

//$var = filter_var($ip,FILTER_VALIDATE_IP) === false && $ip = 'unknown';

//var_dump($var);

//echo $ip;


//$str = "Hello Frien";

//$arr1 = str_split($str);
//$arr2 = str_split($str, 3);


//print_r($arr2);
 $string1 = md5(base64_encode(base64_encode(32768)));
 $string2 = md5(base64_encode(base64_encode("32768")));
echo $string1."<br>";
echo $string2

?>