<?php

   class Person
   {
      public $name;
      protected $money;
      private $age;

      public function __construct($name,$money,$age){
         $this->name = $name;
         $this->age  = $age;
         $this->money  = $money;
      }

     public function __get($name)
      {
         $allow = array('money','age');
         if(in_array($name,$allow))
            return $this->$name;
         else
            return false;
      }
   }

   //实例化
   $person = new Person('abc',6000,28);

   //访问个人信息
   //echo $person->name;          //可以，访问公有属性
   //echo $person->age;         //不可以，age是私有属性，且Person类没有__get方法

   //Person类增加__get方法之后
   echo $person->age;

   //访问一个不存在的
   //var_dump($person->tail);