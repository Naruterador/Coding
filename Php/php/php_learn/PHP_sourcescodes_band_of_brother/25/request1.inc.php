<?php
	/**
		�Զ���ͨ��CURL����URL����
		@param string	 url Ŀ����ַ
		@return	string	 ������ҳ����
	*/
	function request($url) {				
		$ch = curl_init();								//����һ���µ�curl��Դ��������$ch
		
		curl_setopt($ch,CURLOPT_URL,$url);				//����url,ͬ����ʽҲ������������ѡ��
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);	//���û�ȡ�����ݵ������
		
		$output = curl_exec($ch);						//ִ�У�������ȡ���ݸ�������$output
		
		curl_close($ch);								//�ͷ���Դ
		return $output;									//���ػ�ȡ����ҳ����
	}
	
	echo request('http://www.ydma.cn');					//���ú�������������ص���ҳ����
