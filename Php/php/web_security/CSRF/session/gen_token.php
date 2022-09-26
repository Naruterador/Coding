     <?php
     function gen_token() {
          $token = md5(uniqid(rand(), true));
          return $token;
     }