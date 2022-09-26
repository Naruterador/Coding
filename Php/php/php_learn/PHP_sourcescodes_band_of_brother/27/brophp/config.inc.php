<?php
/*********************************************************************************
 * brophp2.0 框架系统全局配置文件，和其它配置文件配合使用                        *
 * *******************************************************************************
 * 许可声明：专为《细说PHP》读者及LAMP兄弟连学员提供的“学习型”超轻量级php框架。*
 * *******************************************************************************
 * 版权所有 (C) 2011-2018 北京易第优教育咨询有限公司，并保留所有权利。           *
 * 网站地址: http://www.ydma.cn 【猿代码】                                       *
 * *******************************************************************************
 * $Author: 高洛峰 (g@itxdl.cn) $                                                *
 * $Date: 2015-07-18 10:00:00 $                                                  * 
 * *******************************************************************************/
	define("OUTPUT_CHARSET", "utf-8"); 	              //设置发送到客户端数据的字符集，默认为utf-8
	define("DEFAULT_TIMEZONE", "PRC");		      //设置时区
	define("URLMOD", 0);				      //设置URL的访问模式 1 为pathinfo模式，  0为普通模式
	define("MESSMOD", 0);				      //设置消息弹出模式 1 为弹出模式，  0为Ajax模式
	define("TPLPREFIX", "html");                           //模板文件的后缀名
	define("LEFT_DELIMITER", "<{");                       //模板文件中使用的“左”分隔符号
	define("RIGHT_DELIMITER", "}>");                       //模板文件中使用的“右”分隔符号

