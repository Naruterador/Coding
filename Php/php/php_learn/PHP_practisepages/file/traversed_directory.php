<?php

function traverseall($filename)
{

	$dir_handle = opendir($filename);
	$dir_name = "";
	while($file = readdir($dir_handle))
	{
		if($file !== "." && $file !== "..")
		{
			$dir_name = $filename."/".$file;
			if(is_dir($dir_name))
			{
				echo "<b>".$dir_name."</b>"."</br>";
				traverseall($dir_name);
			}

			else
				echo $dir_name."</br>";
		}
		
	}
}

traverseall("/var");












?>