<?php
header('Content-Type:text/html');
header('flag: ZmxhZ19pc19oZXJlOiBOalV4TnpFeA==');
$b64 = base64_decode('ZmxhZ19pc19oZXJlOiBOalV4TnpFeA==');
$newb64 = explode(':', $b64);
$b64f = base64_decode($newb64[1]);
if (isset($_POST['pott'])){
	if ($_POST['pott'] == $b64f){
	header("Location: http://127.0.0.1/myphp/game4/path.php"); 
	}
}
?>
</br>Hi,Guys!can you take care of my flag?:)<!-- Please post the pott what you find -->	