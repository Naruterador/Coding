<?php
echo "<h1>Communication Message</h1></br>";
$conn=mssql_connect("localhost","sa","sa");
if(!$conn)
{
	exit("DB Connect Failure</br>");
}

mssql_select_db("emp",$conn) or exit("DB Select Failure<br/>");
$sql="select * from message order by id desc";
$res=mssql_query($sql,$conn) or exit("DB Query Failure</br>");
echo "<table width=90% border=1>";
while ($obj=mssql_fetch_object($res))
{   
  
	echo "<tr align=left>";
	echo "<th>Posting Person:$obj->MessageUsername</br>";
	echo "Posting IP:$obj->ip</br>";
	echo "Posting Time:$obj->at_time</br>";
	echo "Posting Info:$obj->info");
	echo "</th>";
	echo "</tr>";
}
echo "</table>";

echo "</br><a href='MessageBoard.php'>Employee Message Board</a></br>";
?>