<?php

$s = stream_socket_client("tcp://192.168.199.70:4444");

$res = socket_read($s,4);

echo $res;

















?>