<?php
	namespace cn\ydma;					//���������ռ�cn\ydma
	
	include './common.inc.php';			//���뵱ǰĿ¼�µĽű��ļ�common.inc.php
	
	$demo = new Demo(); 				//�������������Ҳ���cn\ydma\Demo�࣬Ĭ�ϻ��ڱ��ռ��в���
	$demo = new \Demo();				//��ȷ�����ù����ռ�ķ�ʽ��ֱ����Ԫ������ǰ�� \ �Ϳ�����
	
	var_dump();							//���� ϵͳ�������ڹ����ռ�
	\var_dump();						//��ȷ��ʹ����"/"

	
	
	
	