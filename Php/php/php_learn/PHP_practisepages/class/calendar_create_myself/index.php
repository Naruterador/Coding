<html>
	<head><title>My Calendar</title></head>
	<body>
		<?php

			include "calendar.class.php";
			
			$calendar = new Calendar;

			echo $calendar->printoutcal();


		?>
	</body>
</html>