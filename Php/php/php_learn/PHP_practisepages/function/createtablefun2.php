<?php
/*
 Create a table without return value by using function;
 */

function createtable($tablename,$rows,$cols)
{

	$str_table = "";
	$str_table .= '<table align="center" border="1" width="600">';
	$str_table .= '<caption><h1>'.$tablename.'</h1></caption>';
		
		for($i = 0;$i < $rows;$i++)
		{
			$str_table .= "<tr>";

			for($j = 0;$j < $cols;$j++)
				$str_table .= "<td>".($i*10+$j)."</td>";

			$str_table .= "</tr>";
		}

	$str_table .=  "</table>";
	return $str_table;
}

echo createtable("table1",10,10);

?>