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
			    echo "My name is ".$this->name." and ".$this->sex." and ".$this->age." olds ";
		    }	
	}

	class Student extends Person 
	{   
		private $school;          
	
         	
	    	function __construct($name="", $sex="female", $age=1, $school="") 
	    	{   
			
		    	parent::__construct($name,$sex,$age);  
			    $this->school=$school;      
		    }

		    function study() 
		    {       
			    echo $this->name." study in ".$this->school." along";
		    }
	
		    function say() 
		    { 
			    parent::say();                         
			    echo "study in ".$this->school."</br>";   
		    }	
	}

	$student=new Student("TOM","male",20, "edu");    
	$student->say();                            
?>
