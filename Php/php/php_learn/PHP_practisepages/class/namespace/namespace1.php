<?php
	namespace MyProject1;  							
	
	const TEST='this is a const';					
	
	function demo() 
	{									
		echo "this is a function";
	}
	
	class User 
	{      								   
		function fun() 
		{
			echo "this is User's fun()";
		}
	}
 
	//echo TEST;										
	//demo();												
	

	namespace MyProject2;  								
		
	const TEST2 = "this is MyProject2 const";			
	echo TEST2;											

	\MyProject1\demo();									
	
	$user = new \MyProject1\User();						
	$user -> fun();

	
?>