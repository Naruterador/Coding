<?php
	namespace cn\ydma;				 //��cn\ydma�ռ�������һ����User
	class User { }

	namespace broshop;					//��broshop�ռ�������������User��CYUser
	class User { }
	Class CYUser { }


	use cn\ydma\User;					//����һ����
	$ydma_User = new User(); 			//�뵱ǰ�ռ��User������ͻ�����������������

	use cn\ydma\User as CYUser;			//Ϊ��ʹ�ñ���
	$ydma_User = new CYUser();			//�뵱ǰ�ռ��CYUser������ͻ�����������������
