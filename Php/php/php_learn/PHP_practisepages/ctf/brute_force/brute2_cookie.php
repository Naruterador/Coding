<?php
function jiami($string)
{
    $str=null;
    $arr=str_split($string,1);
    for($i=0;$i<strlen($string);$i++)
    {
        $arr[$i]=chr(ord($arr[$i])+$i);
    }
    for($i=0;$i<strlen($string);$i++)
    {
        $str.=$arr[$i];
    }
    return $str;
}
function jiemi($string)
{
    $str=null;
    $arr=str_split($string,1);
    for($i=0;$i<strlen($string);$i++)
    {
        $arr[$i]=chr(ord($arr[$i])-$i);
    }
    for($i=0;$i<strlen($string);$i++)
    {
        $str.=$arr[$i];
    }
    return $str;
}
?>
<html>
<head>
    <title>GJCTF-PHP</title>
</head>
<body>
<?php
$flag = 'GJCTF{wolubenweimeiyoukaigua}';
session_start();
if(empty($_COOKIE['count'])){
    $_COOKIE['count'] = jiami('100000');
}

$number1 = rand(0,65535999999);
$number2 = rand(0,65535999999);
$number3 = rand(0,1);

if($number3 == 0){
    $number4 = (int)$number1 + (int)$number2;
    echo "当前表达式：".$number1." + ".$number2;
    setcookie('password',$number4);
}

if($number3 == 1){
    $number4 = (int)$number1 - (int)$number2;
    echo "当前表达式：".$number1." - ".$number2;
    setcookie('password',$number4);
}
?>
<br>
<br>
<form action="./brute2_cookie.php" method="get">
    <input type="text" name="info" placeholder="请输入表达式计算后的结果">
    <input type="submit" name="submit" value="提交">
</form>
</body>

<?php
    if(isset($_GET['info']))
    {
        if($_GET['info'] == $_COOKIE['password']){
            $_COOKIE['count'] = jiami(jiemi((int)$_COOKIE['count']) - 1);
            if(jiemi($_COOKIE['count']) != 0){
                echo "输入正确！<br>";
                echo "<br>你还需要输入:".jiemi($_COOKIE['count'])."次<br>";
            }else{
                echo $flag;
            }
        }else{
            echo "输入错误";
        }
    }
?>
