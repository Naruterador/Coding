<?php	
	trait Demo1_trait {			/*����һ���򵥵�Trait�� ��������Ա����*/
		function method1() { 
			/* �����Ƿ���method1�ڲ�����, �˴�ʡ�� */ 
		}
		function method2() { 
			/* �����Ƿ���method2�ڲ�����, �˴�ʡ�� */ 
		}
	}

	class Demo1_class {			/*����һ����ͨ�࣬ �����л���trait*/
		use Demo1_trait;		// ע�����У�ʹ��use������ʹ��Demo1_trait
	}

	$obj = new Demo1_class();	//ʵ������Demo1_class�Ķ���

	$obj->method1();			//ͨ��Demo1_class�Ķ���,����ֱ�ӵ��û��������Demo1_trait�еĳ�Ա����method1()
	$obj->method2(); 			//ͨ��Demo1_class�Ķ���,����ֱ�ӵ��û��������Demo1_trait�еĳ�Ա����method2()
	
	
	
	