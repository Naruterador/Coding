<?php
	namespace cn\ydma;
	const PATH = '/cn/ydma';
	class User{ }

	
	echo namespace\PATH; 							//namespace�ؼ��ֱ�ʾ��ǰ�ռ�/cn/ydma
	$User = new namespace\User();			
	
	echo __NAMESPACE__; 							//ħ������__NAMESPACE__��ֵ�ǵ�ǰ�ռ�����cn\ydma
	
	$User_class_name = __NAMESPACE__ . '\User';		//������ϳ��ַ���������
	$User = new $User_class_name();
	