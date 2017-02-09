<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
trait Job{
    protected $company;
        
        public function getCompany(){
            echo "<br> company: $this->company<br>";
        }
        public function setCompany($comp){
            $this->company = $comp;
        }
        
        public function toString(){
           // parent::toString(); 
           // non va bene perche all momento dell esecuzione,
           //la funzione apparterra' a Employees e quindi eseguira'
           // toString de suo parent, quindi di Person ; 
            // mentre il $this->toString , il $this al momento dell esecuzione 
            // equivarra' a Emloyees e quindi eseguira' il toStriing() di Employees;
          
      //       $this->toString();
          
            echo "<br> sono il toString() del trait Job";
        }
     }    
