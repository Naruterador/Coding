<?php
header('Content-type: image/png');
$im = imagecreate(200, 200);

//echo imagesx($im);
//echo imagesy($im);

$bg = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);

$String = "Testwords!";


imagestring($im, 2, 10, 10, $String, $black);
imagestringup($im, 3, 120,150 , $String, $black);

for($i = 0;$i<strlen($String);$i++)
{
	imagechar($im,2,10*($i+1),20*($i+2),$String[$i],$black);
	imagecharUP($im,2,10*($i+1),20*($i+2),$String[$i],$black);
}


imagepng($im);
imagedestroy($im);













?>