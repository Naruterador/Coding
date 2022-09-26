<?php
class Form
{
	private $str_title;
	private $str_content;
	private $str_checkbox;
	private $str_form;

	function __construct()
	{	
		$str_title = "";
		$str_content = "";
		$str_checkbox = "";
		$str_form = "";
	}

	public function outmodule()
	{
		$this->form .= '<form action="post.php" method="post" target="_blank">';
		$this->form .= '<table align="center">';
		$this->form .= $this->outtitle();
		$this->form .= $this->outcontent();
		$this->form .= $this->outcheckbox();
		$this->form .= '<input type="submit" name="sub" value="submit">';
		$this->form .= '</form>';
		$this->form .= '</table>';
	
		return $this->form;
	}

	private function outtitle()
	{	$this->str_title .= 'TITLE'.'</br>';
		$this->str_title .= '<input type ="text"  name = "subject" value = "" size = "35">'.'</br>';
		return $this->str_title;

	}

	private function outcontent()
	{	
		$this->str_content .= 'CONTENT';
		$this->str_content .= '</br>'.'<textarea name="message" rows="20" cols="40"></textarea>';
		return $this->str_content;
	}

	private function outcheckbox()
	{
		$this->str_checkbox .='<ul>';
		$this->str_checkbox .='<li><input type = "checkbox" name = "parse[]" value= "1" checked>htmlspecialchars</li>';
		$this->str_checkbox .='<li><input type = "checkbox" name = "parse[]" value= "2">strip_tag</li>';
		$this->str_checkbox .='<li><input type = "checkbox" name = "parse[]" value= "3">displaykeywords</li>';
		$this->str_checkbox .='<li><input type = "checkbox" name = "parse[]" value= "4">connect_a_url</li>';
		$this->str_checkbox .='</ul>';
		return $this->str_checkbox;
	}






}
?>