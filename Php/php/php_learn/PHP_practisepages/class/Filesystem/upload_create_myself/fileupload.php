<?php
date_default_timezone_set("UTC");

class Fileup
{
	protected $path = "./uploads";						//The upload directory;
	protected $allowtype = array("jpg","png","bmp");	//Allowed data type of upload file;
	protected $maxsize = 3500000;    					//Unit of size of file is byte(approximate 3MB);
	protected $israndomname = true;  					//Changed the upload filename if you want or not;
	protected $originname;		     					//The original name of the upload file;
	protected $tmpfilename;			 					//The temporary upload file name;
	protected $filetype;			 					//The file type;
	protected $filesize;			 					//The size of upload file;
	protected $newfilename;		    					//The new upload file name;
	protected $errornum;			 					//The error code number;
	protected $errormessage;		 					//The error message with error code;
	protected $errormessagemul = array(); 				//Multiple upload files error;


	//Setted the property of this class;
	public function setArguments($pro,$val)
	{
		if(array_key_exists($pro,get_class_vars(get_class($this))))
			$this->$pro = $val;
		else
		{
			$this->errornum = -6;
			echo $this->getError();
			return;
		}
		return $this;       //This is optional;
	}

	//Choosed how many files you want to upload with uploaded form name;
	public function uploadTypeChoose($file_form)
	{
		$name = $_FILES[$file_form]['name'];

		if(is_array($name))
			$this->mulFile($file_form);
		else
			$this->singleFile($file_form);
	}


	//Multipled files upload;
	protected function mulFile($file_form)
	{
		$error = array();									//Gather  all the errors;   						
		$passfilename = array();							//Gather  all the filenames;
		$return = true;
		if(!$this->checkFilePath())
		{
			$return = false;
		}

		for($i = 0;$i < count($_FILES[$file_form]['name']);$i++)
		{	
			if(empty($_FILES[$file_form]['name'][$i]))
			{
				$this->errornum = 6;
				$error[] = $this->getError();
				$return = false;
			}
		}

		$name = $_FILES[$file_form]['name'];
		$tmp = $_FILES[$file_form]['tmp_name'];
		$size = $_FILES[$file_form]['size'];
		$errornum = $_FILES[$file_form]['error'];
	

		
		if($return)
		{
			for($i = 0;$i < count($name);$i++)
			{
				if($this->setFile($name[$i],$tmp[$i],$errornum[$i],$size[$i]))
				{	

					if($this->checkFileType() && $this->checkFileSize())
					{
						if($this->copyfile())
						{
							$this->errornum = 5;
							$error[] = $this->getError();
							$passfilename[] = $this->newfilename;

						}else{
							$error[] = $this->getError();
							$return = false;
						}
					}else{

						$error[] = $this->getError();
						$return = false;
					}
					
				}else{

					$error[] = $this->getError();
					$return = false;
				}
			}
		}

		if(!$return)
		{
			$this->errormessagemul = $error;
			return $return;
		}
		else{
			$this->errormessagemul = $error;
			return $return;
		}
	}


	//Single files upload;
	protected function singleFile($file_form)
	{	
		$return = true;
		if(!$this->checkFilePath())
		{
			$return = false;
		}
		
		if(empty($_FILES[$file_form]['name']))
		{
			$this->errornum = 6;
			$return = false;
		}

		if($return)
		{
			$name = $_FILES[$file_form]['name'];
			$tmp = $_FILES[$file_form]['tmp_name'];
			$size = $_FILES[$file_form]['size'];
			$errornum = $_FILES[$file_form]['error'];

			if ($this->setFile($name,$tmp,$errornum,$size))
			{
				if($this->checkFileType() && $this->checkFileSize())
				{
						if($this->copyfile())
						{
							$this->errornum = 5;
							$return = true;
						}
						else{
							$return = false;
						}
					
				}else{
					$return = false;
				}

			}else{
				$return = false;
			}
		}

		if(!$return)
		{
			$this->errormessage = $this->getError();
			return $return;
		}else{
			$this->errormessage = $this->getError();
			return $return;
		}

	}


	//Error reporting;
	public function errorReport($file_form)
	{
		$name = $_FILES[$file_form]['name'];

		if(is_array($name))
			return implode("<br>",$this->errormessagemul);
		else
			return $this->errormessage;
	}

	//Gathered all the error;
	protected function getError()
	{
		$emessage = '<b>Error is: </b>';
		switch($this->errornum)
		{
			case 1:
				$emessage .= $this->originname." Can not upload file!";
				break;
			case 2:
				$emessage .= $this->originname." Can not upload all files!";
				break;
			case 3:
				$emessage .= $this->originname." The capacity of file is out of limit of form size!";
				break;
			case 4:
				$emessage .= $this->originname." The capacity of file is out of limit of php.ini!";
				break;
			case 5:
				$emessage = $this->originname." Upload success!";
				break;
			case 6:
				$emessage .= $this->originname." Please choose a file to upload";
				break;
			case -1:
				$emessage .= $this->originname." Wrong file type!";
				break;
			case -2: 
				$emessage .= $this->originname." The capacity of file is out of limit of".$this->maxsize."!";
				break;
			case -3:
				$emessage .= $this->originname." Upload failed!";
				break;
			case -4:
				$emessage .= $this->originname." Can not create upload directory";
				break;
			case -5:
				$emessage .= $this->originname." Unkonw error";
				break;
			case -6:
				$emessage .= $this->originname." You can not set this propery!";
				break;
		}
			return $emessage;
	}


	//Setted the value of propertis;
	protected function setFile($name = "",$tmp = "",$error = 0,$size = 0)
	{
		
		if($error)
		{
			$this->errornum = $error;
			return false;
		}
		$this->originname = $name;
		$this->tmpfilename = $tmp;
		$this->filesize = $size;
		return true;
	}

	//Checked type of files;
	protected function checkFileType()
	{
		$arext = explode(".",$this->originname);
		$ext = $arext[count($arext) - 1];
		if(in_array($ext,$this->allowtype))
		{
			$this->filetype = $ext;
			return true;
		}else{
			$this->errornum = - 1;
			return false;
		}
	}

	//Checked size of files;
	protected function checkFileSize()
	{
		if($this->filesize < $this->maxsize)
			return true;
		else
		{
			$this->errornum = -2;
			return flase;
		}

	}


	//Check the upload path;
	protected function checkFilePath()
	{
		if(file_exists($this->path))
		{
			$handle = opendir($this->path);
				if($handle && is_writable($this->path))
				{
					return true;
				}else
				{
					$this->errornum = -3;
					return false;
				}

		}else{
			if(@mkdir($this->path,0755))
			{
				return true;
			}else
			{
				$this->errornum = -4;
				return false;
			}
		}

	}

	//Setted new upload file name;
	protected function setNewFileName()
	{
		$newname = date('YmdHis')."_".rand(100,999).".".$this->filetype;   
		$this->newfilename = $newname;
	}


	//Copied file to upload path;
	protected function copyfile()
	{	
		if($this->israndomname)
		{
			$this->setNewFileName();
		}else
			$this->newfilename = $this->originname;

		if(move_uploaded_file($this->tmpfilename, $this->path."/".$this->newfilename))
		{
			return true;
		}else{
			$this->errornum = -3;
			return false;
		}

	}






}





?>