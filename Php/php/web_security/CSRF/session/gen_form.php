     <?php
　　     function gen_input() {
     　　     gen_stoken();
　　          echo “<input type=\”hidden\” name=\”" . FTOKEN_NAME . “\”
          　　     value=\”" . $_SESSION[STOKEN_NAME] . “\”> “;
     　　}
     ?>