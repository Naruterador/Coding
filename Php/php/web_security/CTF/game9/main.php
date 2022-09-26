<html>
<head>
	<title>Search something</title>
	<meta http-equiv="Content-type" content="text/html:charset=utf-8">
</head>
	<body>		
		<?php
		include('config.php');
		if (isset($_GET['work'])){
			$query = $_GET['work'];
			$query = base64_decode($query);
			if($result = $link->query($query)){
				while ($row=$result->fetch_assoc()){
					echo $row['ID'];
					echo $row['class'].'<br>';
				}
			}else{
				exit;
			}
		}else{
			exit;
		}
        ?>
	</body>
</html>