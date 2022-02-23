<?php

  class formClass
  {

    /**
     * proprieter en private satry ts ilaiku any ivelany reo
     */
    private $email ;
    private $motDePasse ;
    private $majuscule = 0 ;
    private $chiffre = 0 ;

    /**
     * recuperation de donne dans l'input
     */
    public function getField($email,$motDePasse) {

        $recup1 = $_POST[$email] ;
        $recup2 = $_POST[$motDePasse] ;

        $this->email = $recup1 ;
        $this->motDePasse = $recup2 ;

    }

    /**
     * verification si email est un vrai email
     */
    public function checkEmail() {

        $verificationEmail = strpos($this->email,'@gmail') ;

        return $verificationEmail ;

    }

    /**
     * verification de mot de passe sy stricte
     */
    public function checkPassword() {

         $tableDeChaine = str_split($this->motDePasse , 1 ) ;
         $compte = strlen($this->motDePasse) ;

         $initialisation = 0 ;
         //parcour le boucle et verification finale
         while ($initialisation < $compte) {

                //  var_dump(gettype($tableDeChaine[$initialisation])) ;

                //verification si mis chiffre ao anatin le motDePasse
                if (intval($tableDeChaine[$initialisation]) != 0 ) {
                    $this->chiffre += 1  ;
                }
                if (ctype_upper($tableDeChaine[$initialisation]) == true) {
                    $this->majuscule += 1 ;
                }

                $initialisation++ ;

         }
         if ($this->chiffre >= 1 AND $this->majuscule >= 1) {
               return true ;
         }
         else {
               return false ;
         }
    }
  }

 ?>
