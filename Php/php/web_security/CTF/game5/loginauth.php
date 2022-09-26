<?php
session_start();
if(isset($_SESSION['code']) and isset($_SESSION['mcode'])){
	$code = $_SESSION['code'];
	$mcode = $_SESSION['mcode'];
}else{
	exit;
}

if (!empty($_POST['uname']) and !empty($_POST['pass']) and !empty($_POST['code'])){
	if ($_POST['uname'] == 'admin' and $_POST['pass'] =='123456' and $_POST['code'] == $code){
	      echo 'flag:I\'m your dady';
    }else{
    	echo 'Please typed right content!';
    }
}else{
	echo 'Username,Password,Code can\'t empty';
}


unset($_SESSION);
session_destroy();











?>