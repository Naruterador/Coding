<?php
header("Content-Type : image/jpeg");

include "filecontrol.php";

$newpic = new Filecontorl("./picture","test.jpg");

$newpic->waterMark("./picture/water.jpeg");












?>