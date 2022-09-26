<?php

    //属性重载
    class Person
    {
        //属性
        public $name;
        private $age;

        //构造方法
        public function __construct($name,$age) 
        {
            $this->name = $name;
            $this->age  = $age;
        }

        //增加__unset方法，没有返回值
        public function __unset($name)
        {
            $allow = array('age');

            //判断
            if(in_array($name,$allow))
            {
            //如果允许删除，就帮助其删除
                unset($this->$name);
            }
        }
    }


    //实例化
    $person = new Person('方智',19);

    //var_dump($person);
    //删除属性
    //unset($person->name);                    //公有属性可以直接被unset掉
    //var_dump($person);

    //unset私有属性
    //unset($person->age);
    //var_dump($person);

    unset($person->tail);