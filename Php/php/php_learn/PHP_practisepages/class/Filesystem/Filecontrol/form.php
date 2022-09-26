<?php
class Form
{
	private $filename;
	function __construct()
	{	
		$this->filename = "";
	}

	function printout()
	{
		$out = "";
		$out .= '<table>';
		$out .= '<caption>'.'FileDir'.'</caption>';
		$out .= '<tr>'.'<td>'.'Please input a filename:'.'</td>'.'</tr>';
		$out .= '<tr>';
		$out .= '<td>';
		$out .= '<form action="index.php" method="post">';
		$out .= '<input type="text" size="30" name="filename" value="'.$this->filename.'">';
		$out .= '<input type="submit" size="30" name="sub" value="submit">';
		$out .= '</form>';
		$out .= '</td>';
		$out .= '</tr>';
		$out .= '</table>';
		return $out;

	}


}











?>