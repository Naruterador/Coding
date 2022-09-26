<?php
session_start();
$username=$_GET['usernm'];
$password=$_GET['passwd'];
$conn=mssql_connect('localhost','sa','root'); 
if(!$conn)
{
	exit("DB Connect Failure<br/><br/>");
}
mssql_select_db('emp',$conn) or exit("DB Select Failure<br/>");

$Query="select * from users where username='$username' and password='$password'";
$AdminResult=mssql_query($Query,$conn) or exit("DB Query Failure!<br/>".$Query); 
$Num=mssql_num_rows($AdminResult);
if($Num>0)
{
$_SESSION['id'] = 1;
$_SESSION['username'] = $_GET['usernm'];
echo "<script>";
echo "url='success.php';location.href=url;";
echo "</script>";
}
else
{
echo "<script>";
echo "url='failure.php';location.href=url;";
echo "</script>";
}


?>
