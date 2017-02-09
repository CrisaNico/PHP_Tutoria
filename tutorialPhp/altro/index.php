<?php  
/*
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
        
        */
         // definizione della sottoclasse Employees
        /*
    class Employees extends Person {
        
        use Job;
        
        public $profile;
         
        public function __construct($name, $age, $profile) // costruttore della sottoclasse
        {    
            parent::__construct($name, $age);
            $this->profile=$profile; // inizializzazione della nuova proprietà della sottoclasse    
        }
        
        public function toString(){
			echo "nome: $this->name    <br> eta' : $this->age     <br> profilo : $this->profile";
		}
                
        public static function generatEmployeeByProfile($profile){
			$pers = new static(null,null,$profile);    
                        $pers->profile = $profile;
			return $pers;
			
		}
               
    } 
    */
  
    // 15 - 11 - 2016  : I traits
    
    //require_once ("Person.php");
    //require_once ("Student.php");
                                                  // require_once ("Employees.php");
    /*
     trait Job{
        private $company;
        
        public function getCompany(){
            echo "company: $this->company<br>";
        }
        public function setCompany($comp){
            $this->$company = $comp;
        }
        /*
        public toString(){
            
        }
     }    
      */  
        
        
 
//$customer1 = new Person("Giuseppe Rossi","34"); 
//echo "Nome: " . $customer1->name."<br>"; 
//echo "Anni: " . $customer1->print_age()."<br>";    
//echo "Anni: " . $customer1->age; // questo provoca un errore  
/*
$person_1 = Person::generatePersonByName("Franco");     
$person_1->toString();

echo "<br><br>";
$person_2 = Person::generatePersonByAge(11);     
$person_2->toString();

echo "<br><br>";
$person_3 = Person::generatePersonNameAge("Dario",21);     
$person_3->toString();

// con l'estensione

echo "<br><br>";
$person_4 = new Employees("Mario",33,"ad");   
$person_4->toString();


echo "<br><br>";
$person_5= Employees::generatEmployeeByProfile("admin");  
$person_5->toString();
   
$person_5->setCompany("Apple");
//$person_5->toStringg();
$person_5->getCompany();
*/
 require_once ("altro/Employees.php");
    $impiegato_1 = new Employees("Dario",21,"MioProfilo");
    $impiegato_1->setApprendimento("10 e lode");
    $impiegato_1->setCorso("Lettere");
    $impiegato_1->toString();
    
    
   
