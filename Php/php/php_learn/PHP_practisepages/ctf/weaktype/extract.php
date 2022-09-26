<html>
<head><title>变量覆盖</title></head>
<body>
<h1 style="text-align: center">Welcome to this Login Page</h1>

<form action="./extract.php" method="post" style="text-align:center ">
    <div><strong>用户名：</strong><input type="text" name="username" value="admin" readonly="readonly"></div>
    <br>
    <div><strong>密  码   ：</strong><input type="password" name="pass"  placeholder="Password" ></div>
    <br>
    <input type="submit" name="submit">
    <br>
</form>
    <div style="visibility: hidden">
        $flag = "GJCTF{***************}";<br>
        if ($_SERVER["REQUEST_METHOD"] == "POST") {<br>
        extract($_POST);<br>
        if(empty($pass) || empty($thepassword_123)){<br>
        echo "you can't get Flag!";<br>
        }<br>
        if ($pass == $thepassword_123) {<br>
        echo $flag;<br>
        }<br>
        <br>
        }else{<br>
        echo "\<center\>the method is error!"."\<center\>";<br>
        }
    </div>
</body>
</html>

<?php
    error_reporting(0);
    $flag = "GJCTF{Sc1551Vrgrxxappbf}";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         extract($_POST);
         if(empty($pass) || empty($thepassword_123)){
             echo "<center><strong>you can't get Flag!</strong></center>";
         }
         if ($pass == $thepassword_123) {
             echo $flag;
         }

     }else{
         echo "<center><strong>the method is error!</center></strong>";
     }



?>
