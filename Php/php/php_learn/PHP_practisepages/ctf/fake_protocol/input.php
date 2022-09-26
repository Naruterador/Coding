<html>
<head>
    <title>我一直觉得PHP是世界上最好的语言</title>
</head>
<body>
<center><h1>Welcome to File Show Page!</h1></center>
<center>
    <h3>Please start your display!</h3>
    <form action="./input.php" method="post">
        <input type="text" name="filename" readonly placeholder="please input the filename" style="width: 180px;height:30px;">
        <br style="clear: both">
        <input style="width: 180px;" type="submit" name="submit">
    </form>
</center>
    <div  style="visibility: hidden">
        $flag = "GJCTF{********************}";
        $filename = @$_GET['filename'];
        $content = @file_get_contents($filename);
        if($content == 'getflag'){
        echo $flag;
        }else{
        echo "your can't get my flag!";
        }
    </div>
</body>
</html>
<?php
    error_reporting(0);
    $flag = "GJCTF{AcE_TQL_getflag}";
    $filename = @$_GET['filename'];
    $content = @file_get_contents($filename);
    if($content == 'getflag'){
        echo $flag;
    }else{
        echo "<center>your can't get my flag!</center>";
    }
?>
