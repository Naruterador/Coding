<?php
$username=$_GET['usernm'];
$password=$_GET['passwd'];

$conn=mssql_connect('localhost','sa','sa'); 

if(!$conn)
{
	exit("DB Connect Failure<br/><br/>");
}
mssql_select_db('emp',$conn) or exit("DB Select Failure<br/>");

$Query="select * from users where username='$username' and password='$password'";
//$Query="select password from users where username='$username'";


if(get_magic_quotes_gpc())
{
	$Query=stripslashes($Query);
}

$AdminResult=mssql_query($Query,$conn) or exit("DB Query Failure!<br/>"); 

$Num=mssql_num_rows($AdminResult);
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
/*
if($obj=mssql_fetch_object($AdminResult))
{
if($obj->password==$password)
{
	header("Location:success.php");
}
else
{
	header("Location:failure.php");
}
}
else
{
    header("Location:failure.php");
}
*/
?>