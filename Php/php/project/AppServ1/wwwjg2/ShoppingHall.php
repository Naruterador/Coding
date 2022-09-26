<?php
session_start();
$_SESSION['token'] = md5(microtime(true));
echo "<h1>Shopping Hall</h1>";
echo "<a href='ShoppingProcess.php?goods=keyboard&quantity=1&check={$_SESSION['token']}'>KeyBoard&nbsp;&nbsp;&nbsp;RMB:100.00</a></br>";
echo "<a href='ShoppingProcess.php?goods=mouse&quantity=1&check={$_SESSION['token']}'>Mouse&nbsp;&nbsp;&nbsp;RMB:50.00</a></br>";
echo "<a href='ShoppingProcess.php?goods=monitor&quantity=1&check={$_SESSION['token']}'>Monitor&nbsp;&nbsp;&nbsp;RMB:500.00</a></br>";
echo "<a href='ShoppingProcess.php?goods=cpu&quantity=1&check={$_SESSION['token']}'>Cpu&nbsp;&nbsp;&nbsp;RMB:1000.00</a></br>";
echo "<a href='ShoppingProcess.php?goods=memory&quantity=1&check={$_SESSION['token']}'>Memory&nbsp;&nbsp;&nbsp;RMB:500.00</a></br>";
echo "<a href='ShoppingProcess.php?goods=dvdrom&quantity=1&check={$_SESSION['token']}'>DvdRom&nbsp;&nbsp;&nbsp;RMB:300.00</a></br>";
echo "</br></br><a href='list.html'>Go Back</a></br>";
?>