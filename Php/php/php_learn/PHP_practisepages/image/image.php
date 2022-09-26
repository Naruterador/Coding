<?php
header ('Content-Type: image/png');

$im = imagecreatetruecolor(200, 200);


$colorbg = imagecolorallocate($im,0,0,255);
$fontcolor = imagecolorallocate($im,255,255,255);
$arccolor = imagecolorallocate($im,69,139,0);

$white    = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
$gray     = imagecolorallocate($im, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($im, 0x90, 0x90, 0x90);
$navy     = imagecolorallocate($im, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($im, 0x00, 0x00, 0x50);
$red      = imagecolorallocate($im, 0xFF, 0x00, 0x00);
$darkred  = imagecolorallocate($im, 0x90, 0x00, 0x00);

/*
for ($i = 60; $i > 50; $i--) 
{
   imagefilledarc($im, 50, $i, 100, 50, 0, 45, $darknavy, IMG_ARC_PIE);
   imagefilledarc($im, 50, $i, 100, 50, 45, 75 , $darkgray, IMG_ARC_PIE);
   imagefilledarc($im, 50, $i, 100, 50, 75, 360 , $darkred, IMG_ARC_PIE);
}
*/

//imagefilledarc($im, 60, 100, 100, 100, 0, 45, $navy,IMG_ARC_PIE);
//imagefilledarc($im, 50, 50, 100, 50, 45, 75 , $gray, IMG_ARC_PIE);
//imagefilledarc($im, 50, 50, 100, 50, 75, 360 , $red, IMG_ARC_PIE);
$text = "aaaaaa";
$font = 'arial.ttf';  
imagettftext($im, 20, 0, 12, 21, $gray, $font, $text); 
imagefilledrectangle($im, 10, 100, 60, 50, $red);

imagefill($im,10,10,$colorbg);
imagestring($im,5,10,0,'Hello world!',$fontcolor);

imagepng($im);

imagedestroy($im);



























?>