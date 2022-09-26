<?php
//    glob:// — 查找匹配的文件路径模式
 

// 循环 ext/spl/examples/ 目录里所有 *.php 文件
// 并打印文件名和文件尺寸
//$it = new DirectoryIterator("glob://ext/spl/examples/*.php");
$it = new DirectoryIterator("glob://./*");
foreach($it as $f) {
    printf("%s: %.1FK\n", $f->getFilename(), $f->getSize()/1024);
}








?>