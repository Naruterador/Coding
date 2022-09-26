<?php

/* 这简单等同于：
  readfile("http://www.example.com");
  实际上没有指定过滤器 */

//readfile("php://filter/resource=http://www.example.com");
//readfile("php://filter/resource=./output.txt");


/* 这会以大写字母输出 www.example.com 的全部内容 */
//readfile("php://filter/read=string.toupper/resource=http://www.example.com");
//readfile("php://filter/read=string.toupper/resource=./output.txt");

/* 这会和以上所做的一样，但还会用 ROT13 加密。 */
//readfile("php://filter/read=string.toupper|string.rot13/resource=./output.txt");
//readfile("php://filter/read=string.toupper|string.rot13/resource=http://www.example.com");

/* 这会通过 rot13 过滤器筛选出字符 "Hello World"
  然后写入当前目录下的 example.txt */
//file_put_contents("php://filter/write=string.rot13/resource=example.txt","Hello World");
file_put_contents("php://filter/write=string.rot13/resource=output.txt","Hello World");













?>