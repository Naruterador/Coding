<?php
class databaseHandle
{
	private $db_type;
	private $db_address;
	private $db_username;
	private $db_password;
	private $db_errormessage;
	private $db_errornum;

	public function __construct($type,$address,$username,$password)
	{
		$this->db_type = trim(strtolower($type));
		$this->db_address = $address;
		$this->db_username = $username;
		$this->db_password = $password;
		$this->errormessage = "Error is : ";

	}

	public function getResult($dbname,$query)
	{
		$outresult = "";
		$type = $this->db_type;
		if(!empty($type))
		{
			if($type == 'mysql' || $type == 'myssql' || $type == 'oc18' || $type == 'paradox' || $type == 'postgresql' || $type == 'sqlite3' || $type == 'sqlite' || $type == 'sqlsrv' || $type == 'sybase' || $type == 'tokyo_tyrant')
			{
				switch($type)
				{
					case "mysql":

						if($this->mysqlConnect($dbname))
						{
							$result = mysql_query($query); 
							if($result)
							{
								while($row = mysql_fetch_row($result))
								{
									$outresult .=  implode(',',$row);
									$outresult .= "</br>";
								}
								return $outresult;
							}else{
								$this->db_errornum = 5;
								return $this->errorMessage();
							}
						}else{
							return $this->errorMessage();
						}
						break;
					case "myssql";
						if($this->mssqlConnect($dbname))
						{
							$result = mssql_query($query); 
							if($result)
							{
								while($row = mssql_fetch_row($result))
								{
									$outresult .=  implode(',',$row);
									$outresult .= "</br>";
								}
								return $outresult;
							}else{
								$this->db_errornum = 8;
								return $this->errorMessage();
							}
						}else{
							return $this->errorMessage();
						}
						break;
					/*
					case "oc18":
						return
						break;
					case "paradox":
						return
						break;
					case "postgresql";
						return
						break;
					case "sqlite":
						return
						break;
					case "sqlite3":
						return
						break;
					case "sqlsrv":
						return
						break;
					case "sybase":
						return
						break;
					case "tokyo_tyrant":
						return
						break;
					*/
				}
			}else{
				$this->db_errornum = 2;
				return $this->errorMessage();
			}
		}else{
			$this->db_errornum = 1;
			return $this->errorMessage();
		}

	}

	private function errorMessage()
	{
		$error = $this->db_errornum;
		switch($error)
		{
			case 1:
				return $this->db_errormessage .= "Please choose the class of database";
				break;
			case 2:
				return $this->db_errormessage .= "Please input the right database name";
				break;
			case 3:
				return $this->db_errormessage .= "Can not connect: ".mysql_error();
				break;
			case 4:
				return $this->db_errormessage .= "Can not use database: ".mysql_error();
				break;
			case 5:
				return $this->db_errormessage .= "Can not run query ".mysql_error();
				break;
			case 6:
				return $thos->db_errormessage .= "Can not connect mssql!";
				break;
			case 7:
				return $thos->db_errormessage .= "Can not connect mssql!";
				break;
			case 8:
				return $thos->db_errormessage .= "Can not query mssql!";
				break;
		}

	}



	private function mysqlConnect($dbname)
	{
		$link = mysql_connect($this->db_address,$this->db_username,$this->db_password);
		if(!$link)
		{
			$this->db_errornum = 3;
			return false;
		}
		$db_selected = mysql_select_db($dbname,$link);
		if(!$db_selected)
		{
			$this->db_errornum = 4;
			return false;
		}
		return true;
	}


	private function mssqlConnect($dbname)
	{
		$link = mssql_connect($this->db_address,$this->db_username,$this->db_password);
		if(!$link)
		{
			$this->db_errornum = 6;
			return false;
		}
		$db_selected = mssql_select_db($dbname,$link);
		if(!$db_selected)
		{
			$this->db_errornum = 7;
			return false;
		}
		return true;

	}

	private function oc18Connect()
	{
		
	}








}











?>