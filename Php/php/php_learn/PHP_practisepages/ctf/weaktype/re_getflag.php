<html>
<head>
    <title>正则？绕过？</title>
</head>
    <body>
    $flag='*************************';<br>
    $IM = preg_match("/key.*key.{4,7}key:\/.\/(.*key)[a-z][[:punct:]]/i",trim($_GET['key']));<br>
    if($IM){<br>
    die("Flag is：".$flag);<br>
    }<br>

    </body>
</html>

<?php
    error_reporting(0);
    $flag  = 'GJCTF{AJDJGpj2a9898ASX00}';
    $IM = preg_match("/key.*key.{4,7}key:\/.\/(.*key)[a-z][[:punct:]]/i",trim($_GET['key']));
    if($IM){
        die("FLAG IS:".$flag);
    }else{
        echo "再试试？";
    }
?>
