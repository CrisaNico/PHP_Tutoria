<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author utente
 */
class Person {
        public $name;
        protected $age;
	public $cognome;
        
        public function __construct($name,$age)
        {
        $this->name = $name;
        $this->age = $age;
        }               
         
        private function get_age(){
            return $this->age;               
        }
             
        public function print_age(){
            return $this->get_age();
        }
		
	public static function generatePersonByName($name){
			
		$pers = new static();
		$pers->name = $name;
		return $pers;
			
			//__construct($name);
	}
		
	public static function generatePersonByAge($age){
		$pers = new static();
		$pers->age = $age;
		return $pers;
			
	}
	public static function generatePersonNameAge($name,$age){
		$pers = new static();
		$pers->name = $name;
		$pers->age = $age;
		return $pers;
			
	}

		public function toString(){
			echo "nome: $this->name    <br> eta' : $this->age";
		}
     
}
