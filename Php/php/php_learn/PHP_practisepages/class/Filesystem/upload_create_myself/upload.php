<?php

	include "fileupload.php";

	$file = new Fileup();
	
	$file->uploadTypeChoose("myfile");
	echo $file->errorReport("myfile");



?>