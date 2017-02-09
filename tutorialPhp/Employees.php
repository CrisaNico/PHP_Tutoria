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
require_once ("Person.php");
require_once ("Job.php");

class Employees extends Person {
          // @override Job 
        use Job;
        
        
 
        
        public $profile;
         
        public function __construct($name, $age, $profile) // costruttore della sottoclasse
        {    
            parent::__construct($name, $age);
            $this->profile=$profile; // inizializzazione della nuova proprietà della sottoclasse    
        }
        
        public function toString(){
                        parent::toString();
			echo "<br> profilo : $this->profile";
                       return Job::toString();
                        }
                
        public static function generatEmployeeByProfile($profile){
			$pers = new static(null,null,$profile);    
                        $pers->profile = $profile;
			return $pers;
			
		}
            
}
