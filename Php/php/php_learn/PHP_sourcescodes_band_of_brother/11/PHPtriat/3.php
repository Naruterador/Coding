<?php	
	trait Demo1_trait {			/*����һ���򵥵�Trait�� ��һ����Ա����*/
		function method1() { 
			/* �����Ƿ���method1�ڲ�����, �˴�ʡ�� */ 
		}

	}
	
	trait Demo2_trait {			/*����һ���򵥵�Trait�� ��һ����Ա����*/
		use Demo1_trait;		//��Trait��ʹ��use����Demo1_trait���룬�γ�Ƕ��
		function method2() { 
			/* �����Ƿ���method2�ڲ�����, �˴�ʡ�� */ 
		}
	}

	class Demo1_class {			/*����һ����ͨ�࣬ �����л���trait*/
		use Demo2_trait;		//ע�����У�ʹ��use����Demo2_trait
	}

	
	
	$obj = new Demo1_class();	//ʵ������Demo1_class�Ķ���

	$obj->method1();			//ͨ��Demo1_class�Ķ���,����ֱ�ӵ��û��������Demo1_trait�еĳ�Ա����method1()
	$obj->method2(); 			//ͨ��Demo1_class�Ķ���,����ֱ�ӵ��û��������Demo1_trait�еĳ�Ա����method2()
	
	
	
