<?php
	/**
		ģ���û���¼����
		@param	$url		string 	��¼�ύ�ĵ�ַ
		@param	$cookie	string	����Cookie��Ϣ������ļ�
		@param	$post	array	�ύ��post����
	*/
	function login_post($url, $cookie, $post) { 
		$ch = curl_init();												//��ʼ��curlģ�� 
		curl_setopt($ch, CURLOPT_URL, $url);							//��¼�ύ�ĵ�ַ 
		curl_setopt($ch, CURLOPT_HEADER, 0);							//�Ƿ���ʾͷ��Ϣ 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);					//�Ƿ��Զ���ʾ���ص���Ϣ 
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie); 					//����Cookie��Ϣ������ָ�����ļ��� 
		curl_setopt($ch, CURLOPT_POST, 1);								//post��ʽ�ύ 
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));	//Ҫ�ύ����Ϣ 
		curl_exec($ch);													//ִ��cURL 
		curl_close($ch);												//�ر�cURL��Դ�������ͷ�ϵͳ��Դ 
	} 
	
	/**
		��¼�ɹ����ȡ���� 
		@param	$url		string 	��Ҫ��ȡ�����ݵ�ַ
		@param	$cookie	string	��ȡCookie��Ϣ������ļ�
		@return  string			ץȡҳ������ 
	*/
	function get_content($url, $cookie) { 
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_HEADER, 0); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie); 					//��ȡcookie 
		$rs = curl_exec($ch); 											//ִ��CURLץȡҳ������ 
		curl_close($ch); 
		return $rs; 													//���������ַ���
	} 
	
	
	
	$post = array ( 								//��ԭ��վ�ı�������post�����ݣ������±��ԭ��վһ��
		'_username' => 'g@ydma.cn', 				//��¼�û���
		'_password' => '123456', 					//��¼����
		'_submit' => '��¼' 
	); 
	
	$url = "http://www.ydma.cn/login/check"; 		//��¼��ַ����ԭ��վһ��
	$cookie = dirname(__FILE__).'/cookie_ydma.txt'; //����cookie����·�� 
	$url2 = "http://www.ydma.cn/course/59"; 		//��¼��Ҫ��ȡ��Ϣ�ĵ�ַ 
	
	login_post($url, $cookie, $post); 				//���ú���login_post()ģ���¼ 
	$content = get_content($url2, $cookie); 		//��¼�󣬵���get_content()������ȡ��¼��ָ����ҳ����Ϣ 
	
	@unlink($cookie); 								//ɾ��cookie�ļ� 							
	file_put_contents('save.txt',$content);			//����ץȡ��ҳ������
	
	
	
	
	