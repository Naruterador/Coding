<html>
<head><title>php input test</title></head>
	<body>
		<form action="" method="post">
			<input type="text" name="username" value="" />
			<input type="submit" name="sub" value="submit"/>
		</form>

			<?php

				file_put_contents("php://output", "message sent by output"."<br>");  //PHP_EOL用于适应不同系统版本的换行
				//php_output只写数据流；

			?>
	</body>
</html>