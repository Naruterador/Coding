<?php
session_start();
if(isset($_SESSION['sKeyBoardQuantity']))
{
	echo "Goods:keyboard------Quantity:".$_SESSION['sKeyBoardQuantity'];
	echo "</br><br/>";
}


if(isset($_SESSION['sMouseQuantity']))
{
	echo "Goods:mouse------Quantity:".$_SESSION['sMouseQuantity'];
	echo "</br><br/>";
}


if(isset($_SESSION['sMonitorQuantity']))
{
	echo "Goods:monitor------Quantity:".$_SESSION['sMonitorQuantity'];
	echo "</br><br/>";
}

if(isset($_SESSION['sCpuQuantity']))
{
	echo "Goods:cpu------Quantity:".$_SESSION['sCpuQuantity'];
	echo "</br><br/>";
}

if(isset($_SESSION['sMemoryQuantity']))
{
	echo "Goods:memory------Quantity:".$_SESSION['sMemoryQuantity'];
	echo "</br><br/>";
}

if(isset($_SESSION['sDvdromQuantity']))
{
	echo "Goods:dvdrom------Quantity:".$_SESSION['sDvdromQuantity'];
	echo "</br><br/>";
}

echo "</br><br/><br/>";
echo "<a href='ShoppingHall.php'>Continue to Buy</a>";
?>