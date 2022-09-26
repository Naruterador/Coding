<?php

class Person
{
    private $name = "";
 
    function __construct($name = "")
    {
        $this->name = $name;
    }
    function say()
    {
        echo "Hello,".$this->name."!<br/>";
    }
 
    function __tostring()
    {//在类中定义一个__toString方法
        return  "Hello,".$this->name."!<br/>";
    }
}
 
$WBlog = new Person('WBlog');
 
echo $WBlog;//直接输出对象引用则自动调用了对象中的__toString()方法
 
//$WBlog->say();//试比较一下和上面的自动调用有什么不同

?>