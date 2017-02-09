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
interface Person {
    
    //public $bestFriend;
    
        public function print_age();
        public function toString();
        
        public function ciao(Person $per);
            
        
        
        
        
    }