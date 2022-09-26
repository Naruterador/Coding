<?php

$pattern = "/^[\w]+@{1}[\w]+\.{1}([a-zA-Z]+){1,3}$/";
$subject = "103258937@qq.com";

preg_match($pattern,$subject,$matches);

print_r($matches);








?>