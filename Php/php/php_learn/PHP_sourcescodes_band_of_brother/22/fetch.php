<?php 
	try{
		$dbh=new PDO('mysql:dbname=testdb;host=localhost','mysql_user','mysql_pwd');��
	}catch(PDOException $e){����������������������������
		echo '���ݿ�����ʧ�ܣ�'.$e->getMessage();        
		exit;����������������������������������������
	}
	echo '<table border="1" align="center" width=90%>';������	
	echo '<caption><h1>��ϵ����Ϣ��</h1></caption>';������
	echo '<tr bgcolor="#cccccc">';������������������������
	echo '<th>UID</th><th>����</th><th>��ϵ��ַ</th><th>��ϵ�绰</th><th>�����ʼ�</th></tr>';

	$stmt=$dbh->query("select uid,name,address,phone,email from contactInfo");  //ִ��SELECT���
	
	/* ��PDO::FETCH_NUMʽ��ȡ���������� */
	while(list($uid, $name, $address, $phone, $email) = $stmt->fetch(PDO::FETCH_NUM)){��				
		echo '<tr>';������������������������������		//���ÿ�еĿ�ʼ���
		echo '<td>'.$uid.'</td>';��������������		//�ӽ���������л�ȡuid����
		echo '<td>'.$name.'</td>';            		//�ӽ���������л�ȡname
		echo '<td>'.$address.'</td>';           		//�ӽ���������л�ȡaddress
		echo '<td>'.$phone.'</td>';           		//�ӽ���������л�ȡphone
		echo '<td>'.$email.'</td>';            		//�ӽ���������л�ȡemail
		echo '</tr>';������������������������������		//���ÿ�еĽ������
	}
	echo '</table>';��������������������������������		


