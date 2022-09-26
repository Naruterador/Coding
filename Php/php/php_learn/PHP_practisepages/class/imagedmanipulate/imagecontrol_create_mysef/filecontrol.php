<?php
class Filecontorl
{
	private $path;
	private $filename;
	private $fullname;
	private $filetype;
	private $sourcepic;
	private $finalpic;


	public function __construct($path,$filename)
	{
		$this->path = $path;
		$this->filename = $filename;
	}

	private function setfilename()
	{
		$this->fullname = $this->path."/".$this->filename;
	}

	private function checkFiletype()
	{
		$this->setfilename();
		$split = explode(".",$this->filename);
		$ext = $split[count($split) - 1];
		$this->filetype = $ext;
	}

	private function openPic()
	{
		$this->checkFiletype();
		$picOtype = $this->filetype;
		switch($picOtype)
		{
			case "jpg":
				$this->sourcepic = imagecreatefromjpeg($this->fullname);
				break;
			case "jpeg":
				$this->sourcepic = imagecreatefromjpeg($this->fullname);
				break;
			case "bmp":
				$this->sourcepic = imagecreatefromwbmp($this->fullname);
				break;
			case "png":
				$this->sourcepic = imagecreatefrompng($this->fullname);
				break;
		}

	}

	private function savePic()
	{
		$picStype = $this->filetype;
		$newfilename = $this->path."/"."new_".$this->filename;
		switch($picStype)
		{
			case "jpg":
				imagejpeg($this->finalpic,$newfilename);
				break;
			case "jpeg":
				imagejpeg($this->finalpic,$newfilename);
				break;
			case "bmp":
				imagewbmp($this->finalpic,$newfilename);
				break;
			case "png":
				imagepng($this->finalpic,$newfilename);
				break;
		}

	}

	private function destroypic()
	{
		imagedestroy($this->sourcepic);
		imagedestroy($this->finalpic);

	}

	public function cutPic($x,$y,$width,$height)
	{
		$this->openPic();

		$this->finalpic = imagecreatetruecolor($width,$height);

		imagecopyresampled($this->finalpic,$this->sourcepic,0,0,$x,$y,$width,$height,$width,$height);

		$this->savePic();

		$this->destroypic();

	}

	public function zoomInandOut($width,$height)
	{	
		$this->openPic();

		$width_origin = imagesx($this->sourcepic);
		$height_origin = imagesy($this->sourcepic);

		if($width && $width_origin < $height_origin)
			$width = ($height / $height_origin) * $width_origin;
		else
			$height = ($width / $width_origin) * $height_origin;
		

		$this->finalpic = imagecreatetruecolor($width, $height);

		imagecopyresampled($this->finalpic, $this->sourcepic, 0, 0, 0, 0, $width, $height, $width_origin, $height_origin);

		$this->savePic();

		$this->destroypic();
	}


	public function turnXandY($turnDirection)
	{
		$this->openpic();

		$width_origin = imagesx($this->sourcepic);
		$height_origin = imagesy($this->sourcepic);

		$this->finalpic = imagecreatetruecolor($width_origin,$height_origin);

		if($turnDirection == 'x' || $turnDirection == 'X')
			for($i = 0;$i < $height_origin;$i++)
				imagecopy($this->finalpic,$this->sourcepic,0,$height_origin-$i-1,0,$i,$width_origin,1);
		if($turnDirection == 'y' || $turnDirection == 'Y')
			for($j = 0;$j < $width_origin;$j++)
				imagecopy($this->finalpic,$this->sourcepic,$width_origin-$j-1,0,$j,0,1,$height_origin);

		$this->savePic();

		$this->destroypic();

	}

	public function rotatePic($degrees)
	{
		$this->openPic();

		$this->finalpic = imagerotate($this->sourcepic, $degrees, 0);

		$this->savePic();

		$this->destroypic();


	}

	public function waterMark($water)
	{

		$this->openPic();
		$this->finalpic = imagecreatefromjpeg($water);

		$water_w = imagesx($this->finalpic);
		$water_h = imagesy($this->finalpic);

		$weight_origin = imagesx($this->sourcepic);
		$height_origin = imagesy($this->sourcepic);

		$posX = rand(0,($weight_origin - $water_w));
		$posY = rand(0,($height_origin - $water_h));

		
		$newfilename = $this->path."/"."new_".$this->filename;
		imagecopy($this->sourcepic,$this->finalpic,$posX,$posY,0,0,$water_w,$water_h);

		imagejpeg($this->sourcepic,$newfilename);

		$this->destroypic();

	}

}





















































































?>