<?php
 	date_default_timezone_set('UTC');

	class Calendar
	{
		private $year;					//inputted year;
		private $month;					//inputted month;
		private $start_weekday;			//inputted Numberic representation of the day of the week;
		private $month_days;			//inputted the amount of days of inputted month;

		public function __construct()
		{
			$this->year = isset($_GET['year']) ? $_GET['year'] : date('Y');
			$this->month = isset($_GET['month']) ? $_GET['month'] : date('n');
			$this->start_weekday = date('w',mktime(0,0,0,$this->month,1,$this->year));
			$this->month_days = date('t',mktime(0,0,0,$this->month,1,$this->year));;

		}

		public function printoutcal()
		{
			$out = "";
			$out .= $this->changedate("index.php");
			$out .= '<table>';
			$out .= $this->weeklists();
			$out .= $this->weekdays();
			$out .= '</table>';
			return $out;

		}

		private function weeklists()
		{
			$out_weeks = '';
			$weeks = array("SUN","MON","TUS","WED","THU","FRI","SAT");
			$out_weeks .= '<tr>';

			for($i = 0;$i < count($weeks);$i++)
				$out_weeks .= '<td bgcolor="#00FF00">'.$weeks[$i].'</td>';

			$out_weeks .= '</tr>';
			return $out_weeks;

		}

		private function weekdays()
		{

			$out_days = "";    //form print out;
			$over_flow_days = date('t',mktime(0,0,0,$this->month - 1,1,$this->year)) - $this->start_weekday;   //the rest of the days of previous month
			$out_days .= '<tr>';

			//padded the rest of the days of previous month in front fo the new month;
			for($i = 0;$i < $this->start_weekday;$i++)
			{
				$over_flow_days++;
				$out_days .= '<td bgcolor="#EE9A00">'.$over_flow_days.'</td>';
			}


			//padded the days into table;
			for($j = 1;$j <= $this->month_days;$j++)
			{
				$i++;
				
				if($j == date('j') && $this->year == date('Y') && $this->month == date('n'))   //set today's date as other color;
					$out_days .= '<td bgcolor="#FF0000">'.$j.'</td>';	
					else
					$out_days .= '<td bgcolor="#FFEC8B">'.$j.'</td>';   //universally padded essential days;


				if($i % 7 == 0)      //change the line when padded 7 days;
					$out_days .= '</tr><tr>';

			}


			//padded the necessary days of next month into table;
			$k = 1;
			while($i < 42)
			{
				if($i % 7 == 0)
					$out_days .='</tr><tr>';

				$out_days .= '<td bgcolor="#B3EE3A">'.$k.'</td>';

				$k++;
				$i++;
			}


			$out_days .= '</tr>';
			return $out_days;

		}

		//set the  previous year;
		private function prevyear($year,$month)
		{
			if($year < 1970)
				$year = 1970;
			else
				$year--;

			return "year=".$year."&"."month=".$month;
		}

		//set the pervious month;
		private function prevmonth($year,$month)
		{
			if($month == 1)
			{
				$year = $year - 1;
				if($year < 1970)
					$year = 1970;
				$month = 12;
			}else
				$month--;

			return "year=".$year."&"."month=".$month;
		}

		//set the next year;
		private function nextyear($year,$month)
		{
			if($year > 2048)
				$year = 2048;
			else
				$year++;

			return "year=".$year."&"."month=".$month;

		}

		//set the next month;
		private function nextmonth($year,$month)
		{
			if($month == 12)
			{
				$year = $year + 1;
				if($year > 2048)
					$year = 2048;
				$month = 1;
			}else
				$month++;

			return "year=".$year."&"."month=".$month;

		}

		private function changedate($url)
		{
			$out_change = "";
			$out_change .= "<table>";
			$out_change .= "<tr>";

			//the button of setting the calendar to the previous year and pervious month;
			$out_change .= '<td>'.'<a href="'.$url.'?'.$this->prevyear($this->year,$this->month).'"> < </a></td>';
			$out_change .= '<td>'.'<a href="'.$url.'?'.$this->prevmonth($this->year,$this->month).'"> << </a></td>';

			//displayed and changed the year manuanlly;
			$out_change .= '<form>'.'<td>';
			if(isset($_GET['year']))
			{

						if($_GET['year'] > 2038)
						{
							$_GET['year'] = 2038;
						}elseif($_GET['year'] < 1970)
						{
							$_GET['year'] = 1970;
						}

						$this->year = $_GET['year'];
			}
			$out_change .= '<input type="text" size="10" onchange="window.location=\''.$url.'?year='.$this->year.'&month='.$this->month.'\''.'" name="year" value="'.$this->year.'" />';
			$out_change .= '</form>'.'</td>';

			//displayed and changed the month manuanlly;
			$out_change .= '<form>'.'<td>';
			if(isset($_GET['month']))
			{

				if($_GET['month'] > 12)
					{
						$_GET['month']  = 12;
					}elseif($_GET['month'] < 1)
					{
						$_GET['month']  = 1;
					}

						$this->month = $_GET['month'];
			}
			$out_change .= '<input type="text" size="10" onchange="window.location=\''.$url.'?year='.$this->year.'&month='.$this->month.'\''.'" name="month" value="'.$this->month.'" />';	
			$out_change .= '</form>'.'</td>';

			//the button of setting the calendar to the next month and next year;
			$out_change .= '<td>'.'<a href="'.$url.'?'.$this->nextmonth($this->year,$this->month).'"> >> </a></td>';
			$out_change .= '<td>'.'<a href="'.$url.'?'.$this->nextyear($this->year,$this->month).'"> > </a></td>';
			
			$out_change .= "</tr>";
			$out_change .= "</table>";
			return $out_change;


		}

	}




































?>