<?php
	namespace cn;						//�����ռ�cn
	
	class User{ }						//��ǰ�ռ�������һ��������User		
	
	
	$cn_User = new User();				//���޶����ƣ���ʾ��ǰcn�ռ�,������ý��������� cn\User();
	$ydma_User = new ydma\User(); 		//�޶����ƣ���ʾ�����cn�ռ�,��ǰ��û�з�б��\, ������ý��������� cn\ydma\User();
	
	$ydma_User = new \cn\User();	 //��ȫ�޶����ƣ���ʾ������cn�ռ�,��ǰ���з�б��\,������ý��������� cn\User();
	
	
	$ydma_User = new \cn\ydma\User(); //��ȫ�޶����ƣ���ʾ������cn�ռ�, ��ǰ���з�б��\, ������ý��������� cn\ydma\User();

	//����cn���ӿռ�ydma
	namespace cn\ydma;
	class User { }
