<?php

	class Person{
		public $firstName;
		public $lastName; 
		public $age;
	

		public function __construct($firstName, $lastName, $age){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->age = $age;
		}

		public function Name(){
			return $this->firstName . $this->lastName;
		}

		public function Age(){
			return $this->age;
		}
}
		$person1 = new Person("Luca", "Veca", "15");
		print "My name is " . $person1->Name() . ". " . "I am " . $person1->Age() . " years old";
	

?>