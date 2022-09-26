<html>
<head>
    <title>GJCTF-PHP</title>
</head>
<body>
<?php
session_start();
$flag = 'GJCTF{wolubenweimeiyoukaigua}';

if(empty($_SESSION['count']))
{
    $_SESSION['count'] = 10000;
}

$number1 = rand(0,65535999999);
$number2 = rand(0,65535999999);
$number3 = rand(0,1);

if($number3 == 0)
{
    $number4 = (int)$number1 + (int)$number2;
    echo "当前表达式：".$number1." + ".$number2;
    setcookie('password',$number4);
}

if($number3 == 1)
{
    $number4 = (int)$number1 - (int)$number2;
    echo "当前表达式：".$number1." - ".$number2;
    setcookie('password',$number4);
}
?>
<br>
<br>
<form action="./brute2_session.php" method="get">
    <input type="text" name="info" placeholder="请输入表达式计算后的结果">
    <input type="submit" name="submit" value="提交">
</form>
</body>

<?php
    if(isset($_GET['info']))
    {
        if($_GET['info'] == $_COOKIE['password'])
        {
            $_SESSION['count'] = (int)$_SESSION['count'] - 1;
            if($_SESSION['count'] != 0)
            {
                echo "输入正确！<br>";
                echo "<br>你还需要输入:".$_SESSION['count']."次<br>";
            }else{
                echo $flag;
            }
        }else{
            echo "输入错误";
        }
    }
?>
