<html>
	<head><title>This is a table test2!</title></head>
		<body>
			<table align="center" border="1" width="600">
			<?php
				$row = 0;
				while($row < 10)
				{
					echo "<tr>";
					
					$col = 0;
					while($col < 10)
						{
							
							echo "<td>".($row*10+$col+1)."</td>";
							$col++;
						}

					echo "</tr>";
					$row++;

				}
			?>
			</table>
		</body>
</html>