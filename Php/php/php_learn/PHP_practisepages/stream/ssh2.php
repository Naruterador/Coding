<?php

$session = ssh2_connect('192.168.199.199', 22);
ssh2_auth_pubkey_file($session, 'root', '/home/username/.ssh/id_rsa.pub','/home/username/.ssh/id_rsa', 'huhuhu555');
$stream = fopen("ssh2.tunnel://$session/remote.example.com:1234", 'r');

?>