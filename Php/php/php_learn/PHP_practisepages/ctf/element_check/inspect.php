<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>您能拿到flag值吗？</title>
    <style type="text/css">
        input{border:none;width: 50px;text-align: center;}
    </style>

</head>

<body>
<form action="#"  method="post">
    <span>if((1000+778)&#60;<input type="text" id="a" name="num"  placeholder="?" maxlength="1"/> ){</span>
    <span><br><!--if($-POST['num']>1778 return;)-->echo flag;<br>}</span>
    <br><button id="check">验证</button>
</form>
</body>
</html>

<?php
error_reporting(0);
$flag = 'GJCTF{A8B52JV0A01JC1_UUQ}';
if($_POST['num'] >1778){
    echo $flag;
}
?>


