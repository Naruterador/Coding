<?php
	namespace cn\ydma;				//���������ռ�Ϊcn\ydma
	class User { }					//��ǰ�ռ�������һ����User

	namespace broshop;				//�ٴ���һ��broshop�ռ�
	
	use cn\ydma;					//����һ�������ռ�cn\ydma
	$ydma_User = new ydma\User();	//���������ռ���ʹ���޶����Ƶ���Ԫ��
	
	use cn\ydma as u;				//Ϊ�����ռ�ʹ�ñ���
	$ydma_User = new u\User();		//ʹ�ñ�������ռ���
	
	use cn\ydma\User;				//����һ����
	$ydma_User = new User();		//��������ʹ�÷��޶����Ƶ���Ԫ��
	
	use cn\ydma\User as CYUser;		//Ϊ��ʹ�ñ���
	$ydma_User = new CYUser();		//ʹ�ñ�������ռ���

	
	