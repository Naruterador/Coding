<html>
	<head><title>This is a table test1!</title></head>
		<body>
			<table border="1" align="center" width=600>
				<caption><h1>A Table one<h1></caption>
				<?php

				/*
					printed a table by using for loop;
				 */
				
					$num = 1;
					for($i = 0;$i < 10;$i++)
					{
						if($i % 2 != 0)
							$bgcolor="#ffffff";
						else
							$bgcolor="#dddddd";
						echo "<tr bgcolor = ".$bgcolor.">";
						for($j = 0;$j < 10;$j++)
						{
							echo "<td>$num</td>";
							$num++;
						}
						echo "</tr>";
					}
				?>
			</table>
		</body>
</html>