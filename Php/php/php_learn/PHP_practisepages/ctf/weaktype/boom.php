<html>
<head>
    <title>PHP是世界上最好的语言？？？</title>
</head>
<body>

    <h1>源码如下：</h1>

    <h3>
        $number1 = $_GET['number1'];<br>
        $number2 = $_GET['number2'];<br>
        if($number1 == $number2){<br>
        echo "error!";<br>
        }else if((md5($number1) == md5($number2)) && (base64_decode($number1) ==base64_decode($number2)))<br>
        {<br>
        echo "flag{**********************}";<br>
        }<br>
    </h3>

</body>
</html>

<?php
error_reporting(0);
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
if($number1 == $number2){
    echo "error!";
}else if((md5($number1) == md5($number2)) && (base64_decode($number1) ==base64_decode($number2)))
{
    echo "GJCTF{AxafKIOHJHOI}";
}

?>
