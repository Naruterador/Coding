<?php
$username=$_GET['usernm'];
$password=$_GET['passwd'];

$conInfo=array('Database'=>'emp', 'UID'=>'sa', 'PWD'=>'zjgsb@2011');
$conn=sqlsrv_connect('127.0.0.1', $conInfo);

if(!$conn)
{
	exit("DB Connect Failure<br/><br/>");
}

$rs=sqlsrv_query($conn, "select * from users where username='$username' and password='$password'");
if($rs == false)

{

    echo("��¼ʧ��111��<br>");

}

else

{
	//$rows=sqlsrv_num_rows($rs);
	if($rs->num_rows >=0)
	{
		echo $num_rows ;
		echo("��¼�ɹ���$num_rows <br>");
	}
	else
	{
		echo("��¼ʧ��222��<br>");
	}

    sqlsrv_free_stmt($rs);

    sqlsrv_close($conn);

}

?>