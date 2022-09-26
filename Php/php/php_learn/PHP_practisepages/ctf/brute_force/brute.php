<?php
error_reporting(0);
session_start();
if(empty($_COOKIE['f14g']) || empty($_SESSION['token']))
{
    
    $rand_number = rand(10000,99999);
    setcookie('f14g',1);
    $_SESSION['token'] = base64_encode(base64_encode(md5($rand_number)));
}
echo "当前session值1:".$_SESSION['token'];
?>
    <html>
    <head>
        <title>你能进来吗？</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    </head>
    <body>
    <form action="./brute.php" method="GET">
        <input type="text" name="password" placeholder="请输入五位数密码!" value="">
        <input type="hidden" name="check" value="<?php echo $_SESSION['token'];?>">
        <input type="submit" name="submit" value="提交">
    </form>
    </body>
    </html>


<?php
if($_SESSION['token'] == $_GET['check'])
{
    $password = $_GET['password'];
    echo "password: ".$password."<br>";
    if(md5($password) == base64_decode(base64_decode($_SESSION['token'])))
    {
        echo "flag:GJCTF{anjjPONFAkg};";
    }else{
        echo "error!";
    }
}else{
    echo "session error!";
}

?>
