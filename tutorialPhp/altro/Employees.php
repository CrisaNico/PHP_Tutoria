<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employees
 *
 * @author utente
 */
require_once ("Student.php");
require_once ("Person.php");
class Employees extends Student implements Person {
    
        public $profile;
         
        public function __construct($name, $age, $profile) // costruttore della sottoclasse
        {    
            $this->name = $name;
            $this->age = $age;
            $this->profile=$profile; // inizializzazione della nuova proprietà della sottoclasse    
        }
        
        public function print_age() {
            return $this->age;
        }
        
        public function toString(){                
                       $output = "Name: ".$this->name."<br>";
                       $output.= "Age: ".$this->age."<br>";
                       $output.= "Profilo: ".$this->profile."<br>";
                       $output.= $this->tuFullString();
                       return $output;
                        }
                        
        public function toFullString() {
        $out = "nome Corso: " . $this->getCorso()."<br>";
        $out .= "livello apprendimento: " . $this->getApprendimento()."<br>";
        return $out;
    }         
}
