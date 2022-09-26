<html>
<head><title>php input test</title></head>
	<body>
		<form action="" method="post">
			<input type="text" name="username" value="" />
			<input type="submit" name="sub" value="submit"/>
		</form>

			<?php

				$postdata = file_get_contents("php://input");
				echo $postdata;

				//  php://input用于访问原始的post数据流;

			?>
	</body>
</html>