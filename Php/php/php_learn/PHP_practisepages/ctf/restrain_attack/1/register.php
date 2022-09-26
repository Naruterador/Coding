<html>
<head><title>注册</title></head>
<body>
<center><h1>欢迎来到注册页面</h1></center>
<center><h3>title:admin已被注册</h3></center>
<center>
    <form action="./register.php" method="post">
        <input type="text" name="username" placeholder="请输入用户名"><br><br>
        <input type="text" name="password" placeholder="请输入密码"><br><br>
        <input type="text" name="password2" placeholder="请再次输入密码"><br><br>
        <input type="submit" name="submit" value="提交"><br><br>
    </form>
</center>
</body>
</html>

<?php
if(!empty($_POST['submit']))
{
    $username = addslashes(htmlspecialchars($_POST['username']));
    $password = addslashes(htmlspecialchars($_POST['password']));
    $password2 = addslashes(htmlspecialchars($_POST['password2']));
    if($username == 'admin'){
        echo "<script>alert('admin已被注册！');window.location.href='./register.php';</script>";
        exit(0);
    }
    if($password !=$password2){
        echo "<script>alert('请确保两次输入的密码相同。');window.location.href='./register.php';</script>";
        exit(0);
    }
    try{
        $db = new PDO('mysql:host=7fp9co9h.2326.dnstoo.com:5505;dbname=czlgj','czlgj_f','Wa360218171');
    }catch (PDOException $e){
        echo $e;
    }
    $sql = $db->prepare("insert into login values(?,?)");
    $sql->execute(array($username,$password));
    $number = $sql->rowCount();
    if($number!=0){
        echo "<script>alert('注册成功！');window.location.href='./login.php'</script>";
    }else{
        echo "<script>alert('注册失败！');window.location.href='./register.php';</script>";
    }
}
?>
