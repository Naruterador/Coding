<?php

   class Person
   {
      public function __set($name,$value)
      {
         $allow = array('name','age','tail');
         if(in_array($name,$allow))
            $this->$name = $value;
      }
   }


   $person = new Person();

   var_dump($person);


   $person->name = '梅西';
   $person->age  = 27;

   $person->drag = '大麻';

   var_dump($person);
?>