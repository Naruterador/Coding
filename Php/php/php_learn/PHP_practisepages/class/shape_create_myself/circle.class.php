<?php
class circle extends shapeCalculator
{
	private $radius;


	function __construct()
	{
		$this->shapename = "circle";

		if($this->checkagruments($_POST['radius']))
			$this->radius = $_POST['radius'];
	}

	function perimetercal()
	{
		return $this->radius * 2 * pi();

	}

	function area()
	{
		return ($this->radius * $this->radius) * pi();

	}

}





?>