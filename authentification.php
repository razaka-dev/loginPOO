<?php
//liainson
require 'formClass.php' ;
include 'customForm.php' ;

//ouverture de session
session_start() ;

//creation de l'objet
$verification = new formClass() ;
$verification1 = new customForm('check') ;

//recuperation de donnees entrez
$verification->getField('email','mdp') ;

//var_dump($verification) ;
var_dump($verification1->getbox()) ;


//verification de de champ email
if (isset($_POST['connect'])) {

      if ($verification->checkEmail() != false  AND $verification->checkPassword() == true ) {
            if ($verification1->getbox() == true) {

                $_SESSION['message'] = "Email et Mot de passe accepter" ;

                //redirection
                header('location:index.php') ;
            }
            else {
                $_SESSION['message'] = "Teste robot non valide" ;

                //redirection
                header('location:index.php') ;
            }
      }
      else {
            $_SESSION['message'] = "Verifier votre Email ou votre Mot de passe" ;

            //redirection
            header('location:index.php') ;
      }

}


 ?>
