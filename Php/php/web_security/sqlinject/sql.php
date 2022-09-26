<?php
if($_POST['user'] && $_POST['pass']) {
  mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
  mysql_select_db(SAE_MYSQL_DB);
  $user = trim($_POST['user']);
  $pass = md5(trim($_POST['pass']));
  $sql="select user from ctf where (user='".$user."') and (pw='".$pass."')";
  $query = mysql_fetch_array(mysql_query($sql));
  if($query['user']=="admin") {
      echo "<p>Logged in! Welcome to this web side!</p>";
  }
  if($query['user'] != "admin") {
    echo("<p>You are not admin!</p>");
  }
}
?>
