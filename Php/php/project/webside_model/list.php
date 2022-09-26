<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
if (!$_SESSION['id']==1){
    echo 'Please login first!';
	header("Location:login.html");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>产品列表</title>
		<style type="text/css">
			*{
			    margin: 0;
			    padding: 0;
			    text-align: center;
			}
			body{
				    background-color: #f3f3f3;
				    font-family: "微软雅黑";
			}
			div#nav{
				background-color: #3598db;
				height: 60px;
			}
			div#nav nav li{
    			display: inline-block;
    			line-height: 60px;
    			padding: 0 10px;
   				border-right: solid 1px #2f89c5;
   				-webkit-transition:background 1s linear;
    			-moz-transition:background 1s linear;
    			-ms-transition:background 1s linear;
    			-o-transition:background 1s linear;
    			transition:background 1s linear;
			}
			div#nav nav li.on , div#nav nav li:hover{
    			background-color: #2f89c5;
			}
			div#nav nav a{
    			color: #ffffff;
    			text-decoration: none;
   				font-size: 16px;
			}
			#body_wrapper{
				margin-top: 40px;
				margin-left: 100px;
				margin-right: 100px;
				font-size: 24px;
			}
			#image{
				float:left;
				width: 400px;
			}
		</style>
	</head>
	<body>
		<div id="head">
			<h1>上海磐云科技有限公司</h1>
			<div id="nav">
	            <nav class="container">
	                <ul>
	                    <li><a href="index.html">集团首页</a></li>
	                    <li class="on" id="yc"><a href="list.html">产品列表</a></li>
	                </ul>
	            </nav>
	        </div>
        </div>
        <div id="body_wrapper">
        	<div id="top">
	        	<div id="image">
	        		<img src="what.jpg" width="200px" height="300px"/>
	        		<br />
	        		<a href="first.html">翻板输送机</a>
	        	</div>
	        	<div id="image">
	        		<img src="happen.jpg" width="200px" height="300px"/>
	        		<br />
	        		<a href="second.html">下坡台输送机</a>
	        	</div>
        	</div>
        	<div id="bottom">
        		<div id="image">
        			<img src="surprise.jpg" width="200px" height="300px"/>
        			<br />
        			<a href="third.html">变轨输送机</a>
        		</div>
        		<div id="image">
        			<img src="amazing.jpg" width="200px" height="300px"/>
        			<br />
        			<a href="fourth.html">转向输送机</a>
        		</div>
        	</div>
        </div>
	</body>
</html>
