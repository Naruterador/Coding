	<?php
include('config.php');

if (isset($_POST['username'])){
	$_POST['username'] = $link-> real_escape_string($_POST['username']);
	$query = "select username from table1 where username='".$_POST['username']."'";
	$query = sprintf($query,$_POST['username']);
	$resultusername = $link->query($query);
	if(!$resultusername->num_rows){
		echo 'Username Error'.'<br>';
		exit;
	}
}else{
	echo 'Username Error'.'<br>';
	exit;
}

if (isset($_POST['password'])){
	$_POST['password'] = $link-> real_escape_string($_POST['password']);
	$query1 = 'select password from table1 where password="'.$_POST['password'].'"';
	$resultpassword = $link->query($query1);
	if(!$resultpassword->num_rows){
		echo 'Password Error'.'<br>';
		exit;
	}else{
		header('Location: main.php');
	}
}


















?>