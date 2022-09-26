<?php
//php 命令行读取输入 STDIN;
//执行方式php php_stdin_stdou_stderr.php;



/** 
 *@ 标准输入 
 *@ php://stdin & STDIN 
 *@ STDIN是一个文件句柄，等同于fopen("php://stdin", 'r') 
 */  

$stdin = fopen('php://stdin','r');
$s = "Input something: ";
fwrite($stdin, $s, strlen($s));
 
$line = fgets(STDIN);
echo $line;
 
//fscanf(STDIN, "%d\n", $number);
//echo $number.PHP_EOL;


/** 
 *@ 标准输出 
 *@ php://stdout & STDOUT 
 *@ STDOUT是一个文件句柄，等同于fopen("php://stdout", 'w') 
 */  
//$fh = fopen('php://stdout', 'w');  
//fwrite($fh, "标准输出php://stdout/n");  
//fclose($fh);  
//fwrite(STDOUT, "标准输出STDOUT/n");  

/** 
 *@ 标准错误，默认情况下会发送至用户终端 
 *@ php://stderr & STDERR 
 *@ STDERR是一个文件句柄，等同于fopen("php://stderr", 'w') 
 */  
//$fh = fopen('php://stderr', 'w');  
//fwrite($fh, "标准错误php://stderr/n");  
//fclose($fh);  
//fwrite(STDERR, "标准错误STDERR/n");  

?>