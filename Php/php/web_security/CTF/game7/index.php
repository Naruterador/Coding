<?php
$md51 = md5('QNKCDZO');
$a = @$_GET['a'];
$md52 = @md5($a);
if(isset($a)){
  if ($a != 'QNKCDZO' && $md51 == $md52) {
     echo "flag{This_question_is_simple!}";
  }else {
     echo "false!!!";
  }
}
else{
	echo "please input a";
}
#answer:a=s878926199a|s155964671a
?>


