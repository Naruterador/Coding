<?php
$keyWord=$_GET['usernm'];
$keyWord=addslashes($keyWord);
$keyWord=str_replace("%","\\%",$keyWord);
$keyWord=str_replace("_","\_",$keyWord);
/*
if($_COOKIE['username'])
{
	header("Location:http://127.0.0.1/login.php");
}
*/
$conn=mssql_connect('localhost','sa','sa'); 

if(!$conn)
{
	exit("DB Connect Failure<br/><br/>");
}
mssql_select_db('emp',$conn) or exit("DB Select Failure<br/>");

$Query="select * from empinfo where username like '%$keyWord%'";
echo $Query;

//$keyWord=str_replace("","",);
if(get_magic_quotes_gpc())
{
	$Query=stripslashes($Query);
}


$Result=mssql_query($Query,$conn) or exit("DB Query Failure!<br/>"); 

while($row=mssql_fetch_row($Result))
{
	echo "UserName:".$row[1]."<br/>";
	echo "Name:".$row[2]."<br/>";
	echo "Email:".$row[3]."<br/>";
	echo "Tel:".$row[4]."<br/>";
	echo "Mobile:".$row[5]."<br/>";
	
	echo "<br/>";
}


?>