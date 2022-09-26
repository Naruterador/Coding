<html>
<head>
    <title>php是世界上最好的语言</title>
</head>
    <body>
        $num=$_GET['num'];<br>
        if(!is_numeric($num))<br>
        {<br>
        echo $num;<br>
        if($num==1)<br>
        echo 'flag{**********}';<br>
        }<br>
    </body>
</html>
<?php
    @$number = $_GET['num'];
    if(!is_numeric($number)){
        echo $number;
        if($number == 1){
            echo "GJCTF{agyugfzxxsaf}";
        }
    }
?>
