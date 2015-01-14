<?php
class Player{
	public $firstName;
	public $lastName;
	public $teamName;
	public $clubName;
	public $nationalName;
	public $sponsorName;
	public $number;

	function __construction($firstName, $lastName, $teamName, $clubName, $nationalName, $sponsorName, $number){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->teamName = $teamName;
		$this->clubName = $clubName;
		$this->nationalName = $nationalName;
		$this->sponsorName = $sponsorName;
		$this->number = $number;
	}

	function getName(){
	return $this->firstName .
		   $this->lastName;
	}
}
class Soccer extends Player{
	function greet(){
	return $this->Goal;
	}
}

class Futbol extends Player{
	function greet(){
	return $this->Goal;
	}
}

$player = new Player("Andrea", "Pirlo", "Juventus", "Serie A", 21, false, true);
echo "Player 1 is ". $player->getName();



class Place{
	public $firstName;
	public $lastName;
	public $temperature;
	public $type;
	public $coordinate;
	public $ethnicity;
	public $size;

	function __construction($firstName, $lastName, $temperature, $type, $coordinate, $ethnicity, $size){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->temperature = $temperature;
		$this->type = $type;
		$this->coordinate = $coordinate;
		$this->ethnicity = $ethnicity;
		$this->size = $size;
	}

	function getName(){
	return $this->firstName .
		   $this->lastName;
	}
}
class Africa extends Place{
	function greet(){
	return $this->Name();
	}
}

$place = new Place("South", "Africa", "Hot", "Desert", "south", false, true);
echo "Place 1 is ". $place->getName();

class Store{
	public $firstName;
	public $lastName;
	public $type;
	public $location;
	public $stores;
	public $sponsorName;
	public $number;

	function __construction($firstName, $lastName, $type, $location, $stores, $sponsorName, $number){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->teamName = $type;
		$this->clubName = $location;
		$this->nationalName = $stores;
		$this->sponsorName = $sponsorName;
		$this->number = $number;
	}

	function getName(){
	return $this->firstName .
		   $this->lastName;
	}
}
class Vons extends Store{
	function greet(){
	return $this->Goal;
	}
}

$vons = new Vons("Vons", "store", "Groceries", "California", 21, false, true);
echo "store 1 is ". $vons->getName();
