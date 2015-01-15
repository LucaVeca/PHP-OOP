<?php
class Player{
	public $firstName;
	public $lastName;
	public $team;
	public $club;
	public $national;

	function __construct($firstName, $lastName, $team, $club, $national){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->team = $team;
		$this->club = $club;
		$this->national = $national;
	}

	function getName(){
	return "This players name is " . $this->firstName .
		   $this->lastName . " he plays for " . $this->team . " in this league " . $this->club . " for this country " . $this->national;
	}
}
class Soccer extends Player{
	function __construct($firstName, $lastName, $team, $club, $national, $foot){
		parent::__construct($firstName, $lastName, $team, $club, $national);
	$this->foot=$foot;
	}
	function greet(){
		return $this->foot;
	}
}
class Basketball extends Player{
	function __construct($firstName, $lastName, $team, $club, $national, $arm){
		parent::__construct($firstName, $lastName, $team, $club, $national);
	$this->arm=$arm;
	}
	function greet(){
		return $this->arm;
	}
}

$player = new Soccer("Andrea", "Pirlo", "Juventus", "Serie A", "Italy", "Left");
echo $player->getName();

class Plants{
	public $firstName;
	public $lastName;
	public $color;
	public $size;
	public $care;

	function __construct($firstName, $lastName, $color, $size, $care){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->team = $color;
		$this->club = $size;
		$this->national = $care;
	}

	function getName(){
	return "This plant name is " . $this->firstName .
		   $this->lastName . " it is " . $this->color . " it is " . $this->club . " you need to " . $this->national . " it";
	}
}
class Succulant extends Plants{
	function __construct($firstName, $lastName, $color, $size, $care, $effect){
		parent::__construct($firstName, $lastName, $color, $size, $care);
	$this->effect=$effect;
	}
	function greet(){
		return $this->effect;
	}
}
class Tree extends Plants{
	function __construct($firstName, $lastName, $color, $size, $care, $age){
		parent::__construct($firstName, $lastName, $color, $size, $care);
	$this->age=$age;
	}
	function greet(){
		return $this->age;
	}
}

$plant = new Plants("Succulant", "Plant", "blue", "small", "water", "minimal water");
echo $plant->getName();

class People{
	public $firstName;
	public $lastName;
	public $color;
	public $size;
	public $care;

	function __construct($firstName, $lastName, $color, $size, $care){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->team = $color;
		$this->club = $size;
		$this->national = $care;
	}

	function getName(){
	return "The persons name is " . $this->firstName .
		   $this->lastName . " he is " . $this->color . " he is " . $this->size . " he needs " . $this->care;
	}
}
class Man extends People{
	function __construct($firstName, $lastName, $color, $size, $care, $effect){
		parent::__construct($firstName, $lastName, $color, $size, $care);
	$this->effect=$effect;
	}
	function greet(){
		return $this->effect;
	}
}
class Woman extends People{
	function __construct($firstName, $lastName, $color, $size, $care, $age){
		parent::__construct($firstName, $lastName, $color, $size, $care);
	$this->age=$age;
	}
	function greet(){
		return $this->age;
	}
}

$person = new People("John", "Doe", "Italian", "tall", "food and water", "strong");
echo $person->getName();

