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
        <h1>POO</h1>
        <?php if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
        } ?>
        <form class="" action="authentification.php" method="post">
              <input type="text" name="email" value="">
              <input type="text" name="mdp" value="">
              <input type="submit" name="connect" value="verifier">
        </form>

  </body>
</html>
<?php
  unset($_SESSION['message']) ;
 ?>
