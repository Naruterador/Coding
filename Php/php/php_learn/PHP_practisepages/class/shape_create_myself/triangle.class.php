<?php
class triangle extends shapeCalculator
{
	private $sideA;
	private $sideB;
	private $sideC;

	function __construct()
	{
		$this->shapename = "circle";

		if($this->checkagruments($_POST['sideA']) && $this->checkagruments($_POST['sideB']) && $this->checkagruments($_POST['sideC']))
			$this->sideA = $_POST['sideA'];
			$this->sideB = $_POST['sideB'];
			$this->sideC = $_POST['sideC'];

	}

	function perimetercal()
	{
		return $this->sideA + $this->sideB + $this->sideC;
	}

	function area()
	{
		$p = 0;
		$base = 0;
		$s = 0;

		$p = ($this->sideA + $this->sideB + $this->sideC)* 0.5;
		$base = $p * ($p - $this->sideA) * ($p - $this->sideB) * ($p - $this->sideC);

		$s = sqrt($base);

		return $s;

	}









}





















?>