<?php
class Filedo extends Filedir
{
	function __construct()
	{
		parent::__construct();
		$this->message = "Error: ";
	}

	function getname()
	{

		$code = $this->filenamecode();
		if($code !== 2)
			return $this->checkfilename($code);
		else
			return $this->filename;
	}

	function getsize()
	{
		$size = 0;
		$code = $this->filenamecode();
		if($code !== 2)
			return $this->checkfilename($code);
		else
		{
			$size = filesize($this->filename);
			switch($size)
			{
				case ($size < 1024):
					return $size;
					break;

				case ($size > 1024 && $size < pow(2,20)) :
					return round(($size / pow(2,10)),2)."KB";
					break;

				case ($size > pow(2,20) && $size < pow(2,30)):
					return round(($size / pow(2,20)),2)."MB";

				case ($size > pow(2,30) && $size < pow(2,40)):
					return round(($size / pow(2,20)),2)."GB";

				case ($size > pow(2,40) && $size < pow(2,50)):
					return round(($size / pow(2,20)),2)."TB";

			}

		}

	}


	function travseddir($filename)
	{
		$size = 0;
		$code = $this->dirnamecode();
		if($code !== 1)
			return $this->checkdirname($code);
		else
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
						$this->travseddir($dir_name);
					}

					else
						echo $dir_name."</br>";
				}
			}

		}

	}


}



?>