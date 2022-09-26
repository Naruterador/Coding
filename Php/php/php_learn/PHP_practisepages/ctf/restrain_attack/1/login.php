<html>

    <head><title>登陆系统</title></head>


<body>

        <center>
            <h1>欢迎来到登陆系统！</h1>
            <h3>第一个注册的用户为：admin</h3>
        </center>
        <form action="./login.php" method="post">
            <center><input type="text" name="username" placeholder="请输入用户名"></center>
            <center><input type="text" name="password" placeholder="请输入密码" ></center>
            <center><input type="submit" name="submit"></center>
        </form>
        <center><a href="./register.php">没有账号点这里！！！</a><br><br></center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    if($username == 'admin'){
        echo "<center>admin已被禁用！</center>";
        exit(0);
    }
    $password = $_POST['password'];

    try{
        $db = new PD('mysql:host=7fp9co9h.2326.dnstoo.com:5505;dbname=czlgj','czlgj_f','Wa360218171');
    }catch(PDOException $e){
        echo $e;
    }
    $query = "select * from login where name = ? and  password = ?;";
    $sql = $db -> prepare($query);
    $sql->execute(array($username,$password));
    $arr = $sql->fetchAll();
    $arr[0][0] = str_replace(' ','',$arr[0][0]);
    echo "<center>当前用户为：".$arr[0][0]."</center><br>";
    if(!empty($arr) && trim($arr[0][0] == 'admin'))
    {
        echo "GJCTF{RandLpsxQQQ}";
        exit(0);
    }else if(!empty($arr)){
        echo "<center>登陆成功。然并卵。</center>";
        exit(0);
    }else{
        echo "登陆失败。";
        exit(0);
    }

}
?>
