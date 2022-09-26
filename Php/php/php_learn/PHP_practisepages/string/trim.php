<?php
	$str="   lamp  ";  
	//echo strlen($str);            
	//echo strlen(ltrim($str));     //print "lamp  "; 
	//echo strlen(rtrim($str));     //print "  lamp"; 
	//echo strlen(trim($str));      //print "lamp";       

	$str="123 This is a test ...";    
	//echo ltrim($str, "0..9");      //print "This is a test ..."; 
	//echo rtrim($str, "."); 		 //print "123 This is a test ";        
	echo trim($str, "0..9 A..Z .");  //print "his is a test";
?>
