<?php
	trait Demo_trait {
		abstract public function func();	//������Լ������η���˵�����������ʵ����
	}

	class Demo_class {
		use Demo_trait;

		function func() {
			/* Code Here */
		}
	}