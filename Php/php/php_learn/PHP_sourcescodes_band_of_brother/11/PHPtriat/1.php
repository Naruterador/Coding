<?php
	/*
		ʹ��trait�ؼ�������һ��Trait, ��Ҫ������php5.4�Ժ�汾��
	*/
	trait DemoTrait {							//ʹ��trait��ʶһ��Trait������ΪDemoTrait
		public $property1 = true;			 	//������Trait��������Ա����
		static $property2 = 1;				 	//������Trait��ʹ��static�ؼ���������̬��Ա
		
		function method1() { /* codes */ }	 	//������Trait��������Ա����
		abstract public function method2();  	//������Լ���������η���˵�����������ʵ����
	}
	
	
	
	
	