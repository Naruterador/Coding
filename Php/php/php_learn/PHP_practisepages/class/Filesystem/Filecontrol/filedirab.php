<?php
abstract class Filedir
{
	protected $filename;
	abstract function getname();
	abstract function getsize();
	abstract function travseddir($filename);

	function __construct()
	{
		$this->filename = isset($_POST['filename'])?$_POST['filename']:"";
	}


	protected function filenamecode()
	{
		if(is_dir($this->filename))
		{
			return 1;
		}

		if(is_file($this->filename))
		{
			$fp = fopen($this->filename,"r");
			
			if($fp)
				return 2;
			else
				return 3;

			fclose($fp);
		}else
			return 4;

	}

	protected function dirnamecode()
	{
		if(is_file($this->filename))
		{
			return 2;
		}

		if(is_dir($this->filename))
		{
			$handle = opendir($this->filename);
			
			if($handle)
				return 1;
			else
				return 3;

			closedir($handle);
		}else
			return 4;

	}

	protected function checkfilename($error)
	{
		switch($error)
		{
			case 1:
				return $this->message .= "This is a directory name not a file name!";
				break;
			case 3:
				return $this->message .= "Can not open the File!";
				break;
			case 4:
				return $this->message .= "This file is not in this directory!";
				break;
		}
	}


	protected function checkdirname($error)
	{
		switch($error)
		{
			case 2:
				return $this->message .= "This is a file name not a directory name!";
				break;
			case 3:
				return $this->message .= "Can not open the directory!";
				break;
			case 4:
				return $this->message .= "This is not a directory!";
				break;
		}
	}

}


































?>