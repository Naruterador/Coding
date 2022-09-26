<?php
	class Rect extends shapeCalculator
	{
		private $weight;
		private $height;


		function __construct()
		{
			$this->shapename = "rect";

			if($this->checkagruments($_POST['height']) && $this->checkagruments($_POST['weight']))
			{
				$this->weight = $_POST['weight'];
				$this->height = $_POST['height'];
			}

		}

		public function perimetercal()
		{
			return ($this->weight + $this->height) * 2;

		} 

		public function area()
		{
			return $this->weight * $this->height;

		}


	}



















?>