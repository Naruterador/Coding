<?php
class Check
{
	private $subject;
	private $message;

	function __construct($subject,$message,$parse = array())
	{
		$this->subject = $this->html2Text($subject);
		if(!empty($parse))
		{
			foreach($parse as $value)
			{
				switch($value)
				{
					case 1:
						$message = $this->html2Text($message);
						break;
					case 2:
						$message = $this->striptag($message);
						break;
					case 3:
						$message = $this->displaykeyworks($message);
						break;
					case 4:
						$message = $this->connecttourl($message);
						break;
				}
			}
		}

		$this->message = $message;
	}

	private function html2Text($message)
	{
		$message = htmlspecialchars($message);
		return $message;
	}

	private function striptag($message)
	{
		$message = strip_tags($message);
		return $message;

	}

	private function displaykeyworks($message)
	{
		$keyword = "/(fuck)|(shit)|(ball)|(cum)|(whore)|(brothel)|(cunt)|(breast)/";

		$message = preg_replace($keyword,"****",$message);

		return $message;
	}


	//substract the length of showing url;
	private function connecttourl($message) 
	{   
		$length = 65;
		$urllink = "<a href=\"".(substr(strtolower($message), 0, 4) == 'www.' ? "http://$message": $message).'" target="_blank">';

			if(strlen($message) > $length) 
			{   
				$message = substr($message, 0, intval($length * 0.5)).' ... '.substr($message, - intval($length * 0.3));
			}
			$urllink .= $message.'</a>';
			return $urllink;
	}


	public function getsubject()
	{
		return $this->subject;
	}

	public function getmessage()
	{
		return $this->message;

	}
	
}





































?>