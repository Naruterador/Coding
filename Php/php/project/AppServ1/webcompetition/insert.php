<?php

$MessageUsername=$_REQUEST['MessageUsername'];
$info=$_REQUEST['message'];

$info=str_replace("<","(",$info);
$info=str_replace(">",")",$info);
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('PRC');
$at_time=date('y-m-d h:i:s A');
echo $info;
if(get_magic_quotes_gpc())
{
	$info=stripslashes($info);
	$MessageUsername=stripslashes($MessageUsername);
}
echo $info;

$conn=mssql_connect("localhost","sa","sa");
if(!$conn)
{
	exit("DB Connect Failure</br>");
}
mssql_select_db("emp",$conn) or exit("DB Select Failure<br/>");
$sql="insert into message(MessageUsername,info,ip,at_time) values('$MessageUsername','$info','$ip','$at_time')";
$res=mssql_query($sql,$conn) or exit("DB Query Failure</br>");
if($res)
{
	echo "Message Success</br></br>";
	echo "<a href='DisplayMessage.php'>Display Message</a>";
}
else
{
	echo "Message Failure</br></br>";
	echo "<a href='MessageBoard.php'>Display Message</a>";
	
}
?>