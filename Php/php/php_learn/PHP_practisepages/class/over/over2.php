<?php
	class Person 
	{           
		protected $name;        
		protected $sex;           
		protected $age;           
		
	    	function __construct($name="", $sex="female", $age=1) 
	    	{  
			    $this->name = $name;          
			    $this->sex = $sex;              
			    $this->age = $age;              
		    }

		    function say()
		    {   
			    echo "My name is ".$this->name." and my gender is ".$this->sex." and i'm ".$this->age." olds ";
		    }	
	}

	class Student extends Person 
	{   
		private $school;             
	
         	
	    	function __construct($name="", $sex="female", $age=1, $school="") 
	    	{   
			    $this->name = $name;          
		    	$this->sex = $sex;              
			    $this->age = $age;             
			    $this->school=$school;         
		    }

		    function study() 
		    {        
		    	echo $this->name." study in ".$this->school."</br>";
		    }
	
		    function say() 
		    { 
			    echo "My name is ".$this->name." and my gender is ".$this->sex." and i'm ".$this->age." olds "." study in ".$this->school;
		    }	
	}

	$student=new Student("TOM","male",20, "edu");    
	$student->say();                            
?>

