<?php
	$pdo = new PDO("mysql:host=localhost;dbname=demo", "mysql_urer", "mysql_password");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //�����쳣����ģʽ
	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);                   //�ر��Զ��ύ

	/* ʹ���쳣��������ȥִ��ת�˵�����������쳣ת��catch������ */
	try {
		$price = 80;	            //��Ʒ���׼۸�Ҳ��ת�˽��
		$pdo->beginTransaction();   //��ʼ�±�

		$affected_rows = $pdo->exec("update account set cash=cash-{$price} where name='userA'"); //ת��
         
		if($affected_rows > 0)
            echo "userA�ɹ�ת����$price��Ԫ�����<br>";
        else
			throw new PDOException('userAת��ʧ��');      //ʧ���׳��쳣����������ִ�У�ת��catch����

		$affected_rows = $pdo->exec("update account set cash=cash+{$price} where name='userB'"); //ת��
	
		if($affected_rows > 0)
            echo "�ɹ���userBת��{$price}Ԫ�����<br>";
        else
			throw new PDOException('userBת��ʧ��');      //ʧ���׳��쳣����������ִ�У�ת��catch����

		echo "���׳ɹ�!";
		$pdo->commit();             //���ִ�е��˴���ʾǰ��������ѯִ�гɹ�����������ִ�гɹ�
	}catch(PDOException $e){
		echo "����ʧ��:".$e->getMessage();
		$pdo->rollback();           //���ִ�е��˴����ʾ�����е����������ˣ� ��������ȫ������
	}

	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 1);          //���¿����Զ��ύ

	
	

