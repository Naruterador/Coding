<?php
$filename=$_GET['filename'];

//$obj='..';
//if(strstr($filename,$obj)==false)
//{
if(!empty($filename)&&$filename=='1.txt')
{
	echo "<pre>";
//	include($filename);
	@readfile("./uploadedfile/".$filename);
	echo "</pre>";
	echo "<br/><a href='DisplayFile.php'>Display Uploaded's File Content</a></br>";
}
else
{
	echo "</br>Please Enter The Uploaded's File Full Path!</br>";
	echo "</br><a href='DisplayFile.php'>Display Uploaded's File Content</a></br>";
}
//}
//else
//{
//	echo "illegal input!";
//}



?>

