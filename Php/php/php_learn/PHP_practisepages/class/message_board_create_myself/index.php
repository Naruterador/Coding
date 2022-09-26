<html>
	<head><title>Message Board</title></head>
		<body>
			<center>
				<h1>Message Board</h1>
			</center>
				<?php
					error_reporting(E_ALL & ~E_NOTICE);
					include "Form.php";
					$form = new Form();
					echo $form->outmodule();
				?>	
		</body>
</html>