<?php
/*
	为了避免当调用的方法不存在时产生错误，可以使用 __call() 方法来避免。该方法在调用的方法不存在时会自动调用，程序仍会继续执行下去。
 */


	class TestClass 
	{                 
		function printHello() 
		{       
			echo "Hello<br>";       
		}

		function __call($functionName, $args) 
		{     
			echo "NO ".$functionName." exists";
			print_r($args);        
			echo '</br>';                                                  
		}	
	}

	$obj=new TestClass();             
	$obj->myFun("one", 2, "three");      
	$obj->otherFun(8,9);               
	$obj->printHello();     









?>

