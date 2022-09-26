<?php
class Result
{
	private $shape;

	function __construct()
	{
		$this->shape = new $_GET['action']();

	}

	public function printresult()
	{
		$str_result = "";

		$str_result .= "The perimeter of ".$_GET['action']." is: ".round($this->shape->perimetercal(),2)."</br>";
		$str_result .= "The area of ".$_GET['action']." is: ".round($this->shape->area(),2);

		return $str_result;


	}







}
















?>