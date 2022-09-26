<html>
<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
<header>
	<title>LoginPage</title>
</header>
       <body>
       	<form action='loginauth.php' method='post'>
       		Username:<input type='text' name='uname' value='' / ><br>
       		Password:<input type='passowrd' name='pass' value='' /><br>
       		<?php
       		session_start();
       		#ini_set('session.gc_maxlifetime', "3600");
            $cap = random_int(1, 99999999);
            $mm5code = substr(md5($cap),0,6);
            $_SESSION['code'] = $cap;
            $_SESSION['mcode'] = $mm5code;
       		echo 'substr(md5($cap),0,6)='.$mm5code.'<br>';
       		?>
       		    code:<input type='text' name='code' value=''><br>
       		         <input type='submit' name='submit' value='upload'>
       	</form>
	
       </body>
</html>
