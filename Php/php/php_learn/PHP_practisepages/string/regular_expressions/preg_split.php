<?php
	
	$subject = "12,34:56;78:12,34:56;78";
	$pattern = "/[,:;]/";

	print_r(preg_split($pattern,$subject));





























?>