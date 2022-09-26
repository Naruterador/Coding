<?php
$filename=$_GET['filename'];
$l='..';
if(!strstr($filename,$l))
{
if(!empty($filename))
{
	echo "<pre>";
	@readfile("./uploadedfile/".$filename);
	echo "</pre>";
	echo "<br/><a href='DisplayFile.php'>Display Uploaded's File Content</a></br>";
}
else
{
	echo "</br>Please Enter The Uploaded's File Full Path!</br>";
	echo "</br><a href='DisplayFile.php'>Display Uploaded's File Content</a></br>";
}
}
else
{
	echo "illegal input!";
}
?>