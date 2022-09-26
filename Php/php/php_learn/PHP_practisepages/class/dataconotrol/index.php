<?php

include "normal.php";

$db_con = new databaseHandle('mysql','192.168.199.18','root','123456');
$query = "select * from table1 where id = '1'";

echo $db_con->getResult('zkpy',$query);












?>