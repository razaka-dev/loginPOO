<?php
//liainson
require 'formClass.php' ;

//ouverture de session
session_start() ;

//creation de l'objet
$verification = new verification() ;

//recuperation de donnees entrez
$verification->getField('email','mdp') ;

//verification de de champ email
//var_dump($verification->checkEmail()) ;
//var_dump($verification->checkPassword()) ;

if (isset($_POST['connect'])) {

      if ($verification->checkEmail() != false  AND $verification->checkPassword() == true ) {
            $_SESSION['message'] = "Email et Mot de passe accepter" ;

            //redirection
            header('location:index.php') ;
      }
      else {
            $_SESSION['message'] = "Verifier votre Email ou votre Mot de passe" ;

            //redirection
            header('location:index.php') ;
      }

}


 ?>
