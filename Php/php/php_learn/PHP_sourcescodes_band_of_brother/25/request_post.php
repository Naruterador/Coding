<?php


	function request_post($url,$data){ // ģ���ύ���ݺ���      
		$ch = curl_init(); // ����һ��CURL�Ự      

		curl_setopt($ch, CURLOPT_URL, $url) ;  			// Ҫ���ʵĵ�ַ 
		curl_setopt($ch, CURLOPT_POST, 1); // ����һ�������Post����     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // // Post�ύ�����ݰ�     
  
  
		$tmpInfo = curl_exec($ch); // ִ�в���      
		if (curl_errno($ch)) {      
			echo 'Errno'.curl_error($ch);      
		}      
    
		curl_close($ch); // �ؼ�CURL�Ự      
		
		return $tmpInfo; // ��������      

	}

	
	$data = array("username"=>'gaoluofeng', 'age'=>30);
	
	echo request_post('http://localhost/g/demo.php', $data);