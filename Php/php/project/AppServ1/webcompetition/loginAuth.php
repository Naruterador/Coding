<?php
$username=$_GET['usernm'];
$password=$_GET['passwd'];

$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);



$conn=Flag1 

if(!$conn)
{
	exit("DB Connect Failure<br/><br/>");
}

Flag2

$Query="select * from users where username='$username' and password='$password'";

if(get_magic_quotes_gpc())
{
	$Query=stripslashes($Query);
}

$AdminResult=Flag3 
$Num=Flag4

if($Num>0)
{
	setcookie("username",$username, time()+60*60);
	header("Location:success.php");
}
else
{
	setcookie("username","");
	header("Location:failure.php");
}
?>