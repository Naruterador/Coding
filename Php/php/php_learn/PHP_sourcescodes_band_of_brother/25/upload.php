<?php
	/**
		ͨ��CURL���б����ļ��ϴ�����
		@param	$url		string	�ύ�ķ�����λ�ã���Ҫ�ַ�������
		@param	$srcFilePath	string	������Ҫ�ϴ����ļ�·���� ��Ҫ�ַ�������
		@param	$postParam	array	���ϴ��ļ�һ���ύ����������POST���ݣ���Ҫ�������
		@return	array	���������ص���Ϣ����һ�����飬 �±�errno��ʾ״̬��0ʧ�ܣ�1�ɹ�����
		                  errmsgΪ������Ϣ��dataΪ������������Ϣ
	*/
	function uploadFile($url, $srcFilePath, $postParam)
	{
		//���PHPΪ5.5���ϰ汾��ʹ��CURLFile
		if (version_compare(phpversion(), '5.5.0') >= 0) {
			$data = array(
				'object_file' => new CURLFile($srcFilePath)
			);
		//���𻷾���5.4(��@�﷨)��������������5.6(��CURLFile)�� 
		} else {
			//����Ҫ�ϴ��ı����ļ�·������һ�����飬 �±���¼���ϴ��ļ��ı����ƣ�·��ǰһ��Ҫ�С�@������
			$data = array(
				'object_file' => '@'.$srcFilePath
			);
		}
		//���ϴ�����Ϣ��post�ύ����Ϣ�ϲ�����������һ�𴫸�������
		$data = array_merge($postParam, $data);

		$ch = curl_init($url);								// ����һ��CURL�Ự   

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		// ���û�ȡ�����ݵ������
		curl_setopt($ch, CURLOPT_POST, true);				// ����һ�������Post����   
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);		// Post�ύ�����ݰ�    
		$response = curl_exec($ch);							// ִ�в���  
		
		if (curl_errno($ch) != 0) {							// �ж��Ƿ��д���
			return array('errno'=>0, 'errmsg'=>"�ϴ�$srcFilePathʧ��: ".curl_error($ch), 'data'=>'');
		}
		curl_close($ch);									// �رղ��ͷ���Դ
		if (!$response) {									// �ж��ϴ��ļ��Ƿ�Ϊ��
			return array('errno'=>0, 'errmsg'=>"�ϴ�$srcFilePathʧ��: response is empty", 'data'=>'');
		}
		//�ϴ��ɹ����سɹ��Ľ������
		return array('errno'=>1, 'errmsg'=>'ok', 'data'=>$response);
	}
	
	//������Ҫ�ϴ����ļ�·��
	$srcFilePath = "C:/wamp/www/g/test.rar";
	
	//����һ���������飬 ͨ��post��ʽ���ύ��������
	$postParam = array("username"=>'gaoluofeng', 'age'=>30);
	
	//����uplodfile������ �ϴ��ļ��� ���ύpost����
	$arr = uploadFile("http://localhost/g/test.php", $srcFilePath, $postParam);
	echo '<pre>';
	print_r($arr);											//��ӡ�ϴ����
	echo '</pre>';
	
	