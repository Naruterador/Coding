<?php
$directory=escapeshellcmd($_GET['directory']);
echo $directory;
//$directory=str_replace("|","/",$directory);

//$s='|';
//if(strstr($directory,$s)==false)
//{
//if($directory=='swbiz')
//{
if(!empty($directory)&&$directory=='swbiz')
{
	echo "<pre>";
	system("dir /w c:\\".$directory);
	echo "</pre>";
	echo "</br><a href='DisplayDirectory.php'>Display C:'s Directory</a></br>";
}
else
{
	echo "<pre>";
	//system("dir /w c:\\");
	echo "</pre>";
	echo "</br>Please enter the directory name!</br>";
	echo "</br><a href='DisplayDirectory.php'>Display C:'s Directory</a></br>";
}
//}
//else
//{
//echo "adfadsadf";
//}
/*}
else
{
	echo "error input!";
}
*/
?>