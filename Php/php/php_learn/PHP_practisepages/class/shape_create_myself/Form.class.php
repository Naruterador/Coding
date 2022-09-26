<?php

class Form
{
	private $action;
	private $shape;

	function __construct($action)
	{
		$this->action = $action;
		$this->shape = isset($_GET['action']) ? $_GET['action'] : "rect";

	}

	public function printform()
	{
		$shape = "";
		$str_form = '';
		$str_form .= '<form method="post" action="'.$this->action.'?action='.$this->shape.'">';

		$shape = "get".ucfirst($this->shape);
		$str_form .= $this->$shape();

		$str_form .= '<input type="submit" name="sub" value="submit">';
		$str_form .= '</form>';

		return $str_form;

	}

	private function getRect()
	{
		$str_formrc = "";
		$str_formrc .= 'Height:'.'<input type = "text" name = "height" value="'.$_POST['height'].'">'.'</br>';
		$str_formrc .= 'Weight:'.'<input type = "text" name = "weight" value="'.$_POST['weight'].'">'.'</br>';
		return $str_formrc;
	}

	private function getCircle()
	{
		$str_formcl = "";
		$str_formcl .= 'Radius:'.'<input type = "text" name = "radius" value="'.$_POST['radius'].'">'.'</br>';
		return $str_formcl;

	}

	private function getTriangle()
	{
		$str_formtr = "";
		$str_formtr .= 'sideA'.'<input type = "text" name = "sideA" value = "'.$_POST['sideA'].'">'.'</br>';
		$str_formtr .= 'sideB'.'<input type = "text" name = "sideB" value = "'.$_POST['sideB'].'">'.'</br>';
		$str_formtr .= 'sideC'.'<input type = "text" name = "sideC" value = "'.$_POST['sideC'].'">'.'</br>';
		return $str_formtr;

	}

}









?>