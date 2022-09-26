<html>
<head>
	<title>en-code</title>
	<meta http-equiv="Content-type" content="text/html:charset=utf-8">
</head>
	<body>		
		<?php
		if (isset($_GET['code'])){
		$result = base64_encode($_GET['code']);
		#$result = str_replace('=','',$result);
		echo $result;
	}else{
	exit;
    }
        ?>
	</body>
</html>