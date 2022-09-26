<?php
$link = new mysqli('localhost','root','123456','game9');

if (mysqli_connect_error()){
	die('Connect Error '.$link->connect_error);
}

?>