<?php
/*
 function __autoload($classname)
 {
 	$classpath="./".$classname.'.php';

 	//if(file_exists($classpath))
	  	include $classpath;
	//else
	  //echo 'class file'.$classpath.'not found!';
}

*/

spl_autoload_register(function ($class_name) 
{
    require_once $class_name . '.php';
});



$newobj = new ClassA();
$newobj = new ClassB();

?>