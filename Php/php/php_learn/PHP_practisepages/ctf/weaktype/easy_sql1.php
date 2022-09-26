<html>
<head><title>Login pass SQL</title></head>
<body>
<center>
    <h1 style="text-align: center">Welcome to this Login Page!</h1>
    <h3>Please login with admin!</h3>
<form action="./easy_sql1.php" method="post" style="text-align:center">
    <strong>用 户 名 ：</strong><input type="text" name="username" placeholder="please input username"><br>
    <strong>密    码 ：</strong><input type="password" name="password" placeholder="Please input your password"><br>
    <input type="submit" name="submit" value="登陆" style="width:15%;text-align: center">
</form>
</center>
</body>
<div style="visibility: hidden">
    $flag = 'GJCTF{**********************}';<br>
    if($_POST[user] && $_POST[pass]) { <br>
    mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS); <br>
    mysql_select_db(SAE_MYSQL_DB);<br>
    $user = trim($_POST[user]);<br>
    $pass = md5(trim($_POST[pass]));<br>
    $sql="select user from ctf where (user='".$user."') and (pw='".$pass."')";<br>
    $query = mysql_fetch_array(mysql_query($sql));<br>
    if($query[user]=="admin") {<br>
        echo "$flag";<br>
    }<br>
    if($query[user] != "admin") {<br>
        echo("You are low!");<br>
    }<br>
    }
    echo $query[user];
</div>
</html>


<?php
    $flag = "GJCTF{tql!tql!niubi!}";
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if(trim(substr($user, 0 , 8)) == "admin')#" || trim(substr($user, 0 , 9)) == "admin')--")
        {
            echo $flag;
        }else{
            echo "<center><strong>your are lower!</strong></center>";
        }
    }else{
    echo "<center><strong>please input your username and password!</strong></center>";
    }
?>
