<html>
	<head><title>Shape (area&perimeter) Calculator</title></head>
		<body>

			<center>
				<h1>Shape Calculator</h1>
				<a href = "index.php?action=rect">Rect</a> ||
				<a href = "index.php?action=circle"> Circle</a> ||
				<a href = "index.php?action=triangle"> Triangle</a>
			</center>
				<?php
					error_reporting(E_ALL & ~E_NOTICE);

					spl_autoload_register(function ($classname)
					{
						include $classname.".class.php";
					});

					$form = new Form("index.php");
					echo $form->printform();

					if(isset($_POST['sub']))
					{
						$result = new Result();
						echo $result->printresult();
					}
				?>
		</body>
</html>