      <?php
　　      if(isset($_POST['submit'])) {
     　　      $hash = md5($_COOKIE['cookie']);
          　　 if($_POST['hash'] == $hash) {
               　　 doJob();
　　           } else {
　　　　　　　　//...
          　　 }
　　      } else {
　　　　　　//...
　　      }
      ?>