   <?php
   include "gen_token.php";
   session_start();
     　　function gen_stoken() {
　　　　　　$pToken = "";
　　　　　　if($_SESSION[STOKEN_NAME]  == $pToken)
　　　　　　　$_SESSION[STOKEN_NAME] = gen_token();
     　　}
     ?>