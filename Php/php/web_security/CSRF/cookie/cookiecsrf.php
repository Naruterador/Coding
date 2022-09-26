　　<?php
       $value = “DefenseSCRF”;
　　　　setcookie(”cookie”, $value, time()+3600);
　　　　$hash = md5($_COOKIE['cookie']);
　　?>
　　<form method=”POST” action=”transfer.php”>
　　　　<input type=”text” name=”toBankId”>
　　　　<input type=”text” name=”money”>
　　　　<input type=”hidden” name=”hash” value=”<?php echo $hash;?>”>
　　　　<input type=”submit” name=”submit” value=”Submit”>
　　</form>