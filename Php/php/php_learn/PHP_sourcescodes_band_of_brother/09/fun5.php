<?php
	/**
		��������callback,��Ҫ��һ����������Ϊ����
	*/
	function callback($callback){
		$callback();						//����ֻ����һ�������������������
	}
	 
	
	callback(function(){					//���ú���ͬʱֱ�Ӵ���һ����������
		echo "�հ���������";
	});
	
	