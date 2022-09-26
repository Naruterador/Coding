<html>
<title>PHP难道不是世界上最好的语言吗？</title>
tips:
$file=$_GET['file'];
<?php
error_reporting(0);
if(!$_GET['file']){echo '<a href="./love_include.php">click me? no</a>';}
$file=$_GET['file'];
if(strstr($file,"../")||stristr($file, "tp")||stristr($file,"input")||stristr($file,"data")){
    echo "Oh no!";
    exit();
}
include($file);
//flag:flag{asnfjkappppasdncaz}
?>
</html>
