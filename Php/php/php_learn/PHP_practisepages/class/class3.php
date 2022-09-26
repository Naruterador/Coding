<?php

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

    //isset魔术方法
    //需要一个参数知道要判断的属性的名字
    public function __isset($name)
    {
 

    	if(empty($this->$name)){
    		return true;
    	}
  		elseif(isset($this->$name))
  			return true;
  		else
  			return false;

    }
}

//实例化
$person = new Person('罗纳尔多',35);

//判断
var_dump(isset($person->name));            //true  能访问到，不经过__isset()魔术方法
var_dump(isset($person->age));            //true  访问不到，经过__isset()魔术方法，判断出age属性是存在的，返回true

var_dump(empty($person->name));            //false 能访问到，不经过__isset()魔术方法
var_dump(empty($person->age));            //true 访问不到，经过__isset()魔术方法，判断出age属性是存在的，返回true（与逻辑不符，所以需要在__isset()函数内部做判断）
?>