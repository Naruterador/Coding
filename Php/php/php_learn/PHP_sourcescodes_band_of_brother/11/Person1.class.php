<?php
	class Person{
		//下面声明的是人类的成员属性，通常成员属性都在成员方法的前面声明
         	var $name;            //第一个成员属性，用于存储人的名子
        	var $age;             //第二个成员属性，用于存储人的年龄
         	var $sex;             //第三个成员属性，用于存储人的性别

		//下面声明了几个人的成员方法,通常将成员方法声明在成员属性的下面
		function say(){      //这个人可以说话的方法
			echo "这个人在说话";            //方法体
		}		

		function run(){      //这个人可以走路的方法
			echo "这个人在走路";           //方法体
		}		
	}
?>

