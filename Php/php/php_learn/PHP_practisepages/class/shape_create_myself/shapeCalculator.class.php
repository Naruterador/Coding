<?php
	abstract class shapeCalculator
	{
		protected $shapename;
		abstract function perimetercal();
		abstract function area();

		protected function checkagruments($value)
		{
			if($value="" || !is_numeric($value) || $value < 0)
			{
				echo "Please input the right value of ".$this->shapename."</br>";
				return false;
			}
			else
				return true;

		}
	}

?>