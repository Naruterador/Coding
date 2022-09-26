<?php

$conn=mssql_connect('localhost','sa','sa'); 
mssql_select_db('emp',$conn); 
//queryÓï¾ä 
$Query="select * from users"; 
$AdminResult=mssql_query($Query); 
//Êä³ö½á¹û 
$Num=mssql_num_rows($AdminResult);
if($Num>0)
{
	echo "µÇÂ¼³É¹¦£¡<br/>";
}
else
{
	echo "µÇÂ¼Ê§°Ü£¡<br/>";
}
/* 
for($i=0;$i<$Num;$i++) 
{ 
$Row=mssql_fetch_array($AdminResult); 
echo($Row[1].$Row[2]); 
echo("
");
*/

?>