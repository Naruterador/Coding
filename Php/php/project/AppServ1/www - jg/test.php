<?php

$conn=mssql_connect('localhost','sa','sa'); 
mssql_select_db('emp',$conn); 
//query��� 
$Query="select * from users"; 
$AdminResult=mssql_query($Query); 
//������ 
$Num=mssql_num_rows($AdminResult);
if($Num>0)
{
	echo "��¼�ɹ���<br/>";
}
else
{
	echo "��¼ʧ�ܣ�<br/>";
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