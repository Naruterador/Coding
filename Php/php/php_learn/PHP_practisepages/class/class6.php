<?php
/*
当一个对象被串行化,PHP会调用__sleep方法(如果存在的话). 在反串行化一个对象后,PHP 会调用__wakeup方法. 这两个方法都不接受参数. __sleep方法必须返回一个数组,包含需要串行化的属性. PHP会抛弃其它属性的值. 如果没有__sleep方法,PHP将保存所有属性.


在程序执行前，serialize() 函数会首先检查是否存在一个魔术方法 __sleep.如果存在，__sleep()方法会先被调用， 然后才执行串行化（序列化）操作。这个功能可以用于清理对象，并返回一个包含对象中所有变量名称的数组。如果该方法不返回任何内容，则NULL被序列化，导致 一个E_NOTICE错误。与之相反，unserialize()会检查是否存在一个__wakeup方法。如果存在，则会先调用 __wakeup方法，预先准备对象数据。

 

__sleep方法常用于提交未提交的数据，或类似的操作。同时，如果你有一些很大的对象， 不需要保存，这个功能就很好用。__wakeup经常用在反序列化操作中，例如重新建立数据库连接，或执行其它初始化操作。
 */


class user
 {
    public $name;
    public $id;
     
    function __construct() 
    {    // 给id成员赋一个uniq id
        $this->id = uniqid();
    }
         
    function __sleep() 
    {       //此处不串行化id成员
        return(array('name'));
    }
         
    function __wakeup() 
    {
        $this->id = uniqid();
    }
}
 
$u = new user();
 
$u->name = "Leo";
 
$s = serialize($u); //serialize串行化对象u，此处不串行化id属性，id值被抛弃
 
$u2 = unserialize($s); //unserialize反串行化，id值被重新赋值


  
 
//对象u和u2有不同的id赋值
 
print_r($u);
 
print_r($u2);
 
?>