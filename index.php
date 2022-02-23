<?php

//ouverture de session
session_start() ;

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <h1>verification</h1>
        
        <?php if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
        } ?>

        <form class="" action="authentification.php" method="post">
              <input type="text" name="email">
              <input type="text" name="mdp">
              <input type="checkbox" name="check[]">
              <label for="">robot</label>
              <input type="submit" name="connect" value="verifier">

        </form>

  </body>
</html>
<?php
  unset($_SESSION['message']) ;
 ?>
