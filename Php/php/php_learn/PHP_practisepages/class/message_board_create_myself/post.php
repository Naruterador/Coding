<?php

include "check.php";

if(isset($_POST['sub']))
{
	$messageboard = new Check($_POST['subject'],$_POST['message'],$_POST['parse']);
	echo $messageboard->getsubject();
	echo '<hr>';
	echo $messageboard->getmessage();

}
















?>