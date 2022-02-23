<?php

/**
 *
 */
class customForm extends formClass
{
    //propriete
    public $check ;
    public $name ;

    /**
     * recuperation de donne dans le checkbox
     */
    public function __construct($name) {

      //affectation de variable et recuperation
      $this->name = $name ;
      $recuperation = $_POST[$name] ;
      $this->check = $recuperation ;

    }
    /**
     * return si le checkbox est cocher
     */
    public function getbox() {

        //si differnet de vide le case a coucher
        if (!empty($_POST[$this->name])) {

            return true ;
        }
        else {

            return false ;
        }
    }

  }

 ?>
