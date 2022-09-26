<?php

//Returns a trailing name component of path
$path = "/var/www/html/index.php";
echo basename($path)."</br>";
echo basename($path,".php")."</br>";

//Returns a parent directory's path
echo dirname($path)."</br>";
echo dirname("c:/")."</br>";
echo dirname("/var/www/html/")."</br>";

//Gets a character from file pointer;
$fp = fopen("./test.txt","r") or die("can not openfile");
while(false !== ($char = fgetc($fp)))
	echo $char."&nbsp;";
fclose($fp);

echo "<br>";

//Gets a line from file pointer;
$fp = fopen("./test.txt","r") or die("can not openfile");
while(!feof($fp))
	echo fgets($fp,2);
fclose($fp);

echo "<br>";

//Writes date to file
//$date = "Function testing";
//file_put_contents("date.txt", $data);

//Reads entire file into a string
$file = file_get_contents("./test.txt");
echo $file;




?>