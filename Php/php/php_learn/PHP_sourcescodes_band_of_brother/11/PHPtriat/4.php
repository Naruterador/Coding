<?php
	trait Demo1_trait {
		function func() { 
			echo "��һ��Trait�е�func����";
		}
	}

	trait Demo2_trait {							// ��������ƺ� Demo1_trait һ�������г�ͻ
		function func() { 
			echo "�ڶ���Trait�е�func����";
		}
	}

	class first_class {
		use Demo1_trait, Demo2_trait {			// Demo2_trait ��������
			
			
			Demo1_trait::func insteadof Demo2_trait; // ����������ʹ�� Demo1_trait �� func �滻
		}
	}  

	$obj = new first_class();

	
	$obj->func();								//���: ��һ��Trait�е�func����