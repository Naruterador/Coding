<?php
	$var = 2;										//�ñ�����Ϊ�û����ֵ���ֱ�����1��2��3���п����
	
	switch($var) {
		case 1: 
			goto one;								//ʹ��goto�����ת��one��Ǵ�
			echo "one";								//goto�Ѿ���ת�� �������벻��ִ�е�
		case 2: 
			goto two;								//ʹ��goto�����ת��two��Ǵ�
			echo "two";								//goto�Ѿ���ת�� �������벻��ִ�е�
		case 3: 
			goto three;								//ʹ��goto�����ת��three��Ǵ�
			echo "three";							//goto�Ѿ���ת�� �������벻��ִ�е�
	}
	
	one:											//Ϊgoto���������һ����ת��ǣ����ƶ���Ϊone
		echo "���������ֵ��1�� ����ת���˴�ִ�У�";
		exit;
		
	two:											//Ϊgoto��������ڶ�����ת��ǣ����ƶ���Ϊtwo
		echo "���������ֵ��2�� ����ת���˴�ִ�У�";
		exit;
		
	three:											//Ϊgoto���������������ת��ǣ����ƶ���Ϊthree
		echo "���������ֵ��3�� ����ת���˴�ִ�У�";
		exit;
		
		
		