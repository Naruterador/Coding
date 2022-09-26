<html>
<title>WorkHard!</title>
<?php error_reporting(0);
if(!$_GET['mystring']){
	echo '<a href="./index.php?mystring=show.php">Can you find out my Big strong dick?</a>';
}
$file=$_GET['mystring'];
if(strstr($file,"../")||stristr($file, "tp")||stristr($file,"input")||stristr($file,"data")){
	echo "Oh no!";
    exit();
}
include($file); 
//flag:{welcome_to*my_realm}
#answer:php://filter/read=convert.base64-encode/resource=index.php
?>
</html>
