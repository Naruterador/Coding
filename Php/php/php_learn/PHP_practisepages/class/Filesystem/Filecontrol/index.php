<html>
	<head><title>File_Dir</title></head>
	<body>
		<?php
			include "form.php";
			include "filedirab.php";
			include "filedo.php";

			$form = new Form();

			echo $form->printout();

			$file = new Filedo();

			if(isset($_POST['sub']))
				echo $file->travseddir($_POST['filename']);



		?>
	</body>





</html>