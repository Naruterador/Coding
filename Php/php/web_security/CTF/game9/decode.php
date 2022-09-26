<html>
<head>
	<title>de-str</title>
	<meta http-equiv="Content-type" content="text/html:charset=utf-8">
</head>
	<body>		
		<?php
		if (isset($_GET['str'])){
		$result = base64_decode($_GET['str']);
		echo $result;
	}else{
	exit;
    }
        ?>
	</body>
</html>