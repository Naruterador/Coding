<?php
/*
 Create a table without return value by using function;
 */

function createtable($tablename,$rows,$cols)
{
	echo '<table align="center" border="1" width="600">';
		echo '<caption><h1>'.$tablename.'</h1></caption>';
		
		for($i = 0;$i < $rows;$i++)
		{
			echo "<tr>";

			for($j = 0;$j < $cols;$j++)
				echo "<td>".($i*10+$j)."</td>";
			
			echo "</tr>";
		}

	echo "</table>";
	return;
}

createtable("table1",10,10);

?>