<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author utente
 */
abstract class Student  {
    
    private $nomeCorso;
    private $livelloApprendimento;
    
  protected function getCorso(){
      echo "Corso: $this->nomeCorso";
  }
  public function setCorso($cors){
      $this->nomeCorso = $cors;
  }
  protected function getApprendimento(){
        echo "livello Apprendimento: $this->livelloApprendimento";  
    }
    function setApprendimento($app){
        $this->livelloApprendimento = $app;
    }
 abstract function toFullString(/*$nomeCorso,$apprendimento*/);
    
    
    //put your code here
}
