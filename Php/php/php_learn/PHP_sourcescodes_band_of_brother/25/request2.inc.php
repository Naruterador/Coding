<?php
	/**
		�Զ���ͨ��CURL����URL����,���������ڲ���curl_getinfo()��ʹ��
		@param string	 url Ŀ����ַ
		@return	string	 ������ҳ����
	*/
	function request($url) {				
		$ch = curl_init();								//����һ���µ�curl��Դ��������$ch
		
		curl_setopt($ch,CURLOPT_URL,$url);				//����url,ͬ����ʽҲ������������ѡ��
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);	//���û�ȡ�����ݵ������
		
		$output = curl_exec($ch);						//ִ�У�������ȡ���ݸ�������$output
	
		/*ͨ��curl_getinfo()��������ȡ������������Ϣ�� ��ͨ���ڶ�������CURLINFO_HTTP_CODE��ȡָ���ķ���״̬��*/
		$response_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
		
		curl_close($ch);								//�ͷ���Դ
		
		/*������ص�״̬��Ϊ404����ʾ�����ҳ�治���� */
		if($response_code=='404'){
			echo '�����ҳ�治���ڣ�';
			return false;
		}else{
			return $output;								//���ػ�ȡ����ҳ����
		}
	}
	
	echo request('http://www.ydma.cn/does/not/exist');	//���ú�������������ص���ҳ����, ��������ڷ���false
	
	
	
	

	
	
	