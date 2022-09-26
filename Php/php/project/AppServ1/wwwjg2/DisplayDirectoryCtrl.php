<?php
$directory=$_GET['directory'];
//$s='|';
//if(strstr($directory,$s)==false)
//{
if(!empty($directory))
{
	echo "<pre>";
	system("dir /w c:\\".$directory);
	echo "</pre>";
	echo "</br><a href='DisplayDirectory.php'>Display C:'s Directory</a></br>";
}
else
{
	echo "<pre>";
	system("dir /w c:\\");
	echo "</pre>";
	echo "</br>Please enter the directory name!</br>";
	echo "</br><a href='DisplayDirectory.php'>Display C:'s Directory</a></br>";
}
//}
//else
//{
	//echo "illegal input!";
//}
?>