<?php
session_start();
$Goods=$_GET['goods'];
$Quantity=$_REQUEST['quantity'];
if($_REQUEST['check'] === $_SESSION['token']){
  switch($Goods)
  {
	case 'keyboard':
		if(isset($_SESSION['sKeyBoardQuantity']))
		{
			$_SESSION['sKeyBoardQuantity']=$_SESSION['sKeyBoardQuantity']+$Quantity;
		}
		else
		{
			$_SESSION['sKeyBoardQuantity']=$Quantity;
		}
		break;
	case 'mouse':
		if(isset($_SESSION['sMouseQuantity']))
		{
			$_SESSION['sMouseQuantity']=$_SESSION['sMouseQuantity']+$Quantity;
		}
		else
		{
			$_SESSION['sMouseQuantity']=$Quantity;
		}
		break;
	case 'monitor':
		if(isset($_SESSION['sMonitorQuantity']))
		{
			$_SESSION['sMonitorQuantity']=$_SESSION['sMonitorQuantity']+$Quantity;
		}
		else
		{
			$_SESSION['sMonitorQuantity']=$Quantity;
		}
		break;
	case 'cpu':
		if(isset($_SESSION['sCpuQuantity']))
		{
			$_SESSION['sCpuQuantity']=$_SESSION['sCpuQuantity']+$Quantity;
		}
		else
		{
			$_SESSION['sCpuQuantity']=$Quantity;
		}
		break;
	case 'memory':
		if(isset($_SESSION['sMemoryQuantity']))
		{
			$_SESSION['sMemoryQuantity']=$_SESSION['sMemoryQuantity']+$Quantity;
		}
		else
		{
			$_SESSION['sMemoryQuantity']=$Quantity;
		}
		break;
	case 'dvdrom':
		if(isset($_SESSION['sDvdromQuantity']))
		{
			$_SESSION['sDvdromQuantity']=$_SESSION['sDvdromQuantity']+$Quantity;
		}
		else
		{
			$_SESSION['sDvdromQuantity']=$Quantity;
		}
		break;
	default:
		break;
  }
 
 echo "<h1>Shopping Success!</h1></br>";
}
echo "<a href='ShoppingHall.php'>Continue to Buy</a></br>";
echo "<a href='PurchsedGoods.php'>Purchsed Goods</a></br>";

?>