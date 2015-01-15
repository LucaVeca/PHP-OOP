
<!-- LECTURE 1 -->
<!-- EXAMPLE 1 -->
<!--
class Soccer{
	//class player
	//class ball
	//class goal
}

$soccer1 = newSoccer();
$soccer2 = newSoccer();

class Soccer {
	public $name="player";
	public $number=13;
	public $team="Juventus";
	public $club="Serie A";
}

$soccer1 = new Soccer();
print $soccer1>
name;
// default name

public function myMethod( $name, $number) {
// stuff
}
////////////////////////////////////////////////////////////// /\///\/_//\ /////////////////////////////////////////////////////////////
<!-- EXAMPLE 2 -->
<!--
class Music{
	//class Instrument
	//class Genre
	//class Volume
}

$music1 = newMusic();
$music2 = newMusic();

class Music {
	private $Band="Led Zepplin";
	private $song="Stairway to Heaven";
	private $genre="Rock";
	private $Members=4;
}

$music1 = new Music();
print $music1>
name;
// default name

public function myMethod( $Band, $song) {
// stuff
}
//////////////////////////////////////////////////////////////// /\///\/_//\ ///////////////////////////////////////////////////////////
<!-- EXAMPLE 3 -->
<!--
class Nature{
	//class plant
	//class food
	//class tree
}

$nature1 = newNature();
$nature2 = newNature();

class Nature {
	protected $tree="oak";
	protected $fruit="apple";
	protected $vegetable="Artichoke";
	protected $flower="Cherry Blossom";
}

$nature1 = new Nature();
print $nature1>
name;
// default name

public function myMethod( $tree, $fruit) {
// stuff
}
//////////////////////////////////////////////////////////////// /\///\/_//\ /////////////////////////////////////////////////////////
<!-- EXAMPLE 4 -->
<!--
class Soccer {
	public $name="player";
	public $number=13;
	public $team="Juventus";
	public $club="Serie A";

	function getName() {
	return “{$this>
	firstName}” .
	“{$this>
	lastName}”;
	}
}

$soccer1 = new Soccer();
$soccer1>firstName = “Andrea”;
$soccer1>lastName = “Pirlo”;
print “The players name is{$soccer1>getName()}.”;

//The players name is Andrea Pirlo
//////////////////////////////////////////////////////////////// /\///\/_//\ /////////////////////////////////////////////////////////
<!-- EXAMPLE 5 -->
<!--
class Music {
	private $Band="Led Zepplin";
	private $song="Stairway to Heaven";
	private $genre="Rock";
	private $Members=4;

	function getName() {
	return “{$this>
	firstName}” .
	“{$this>
	lastName}”;
	}
}

$music1 = new Music();
$music1>firstName = “Led”;
$music1>lastName = “Zepplin”;
print “The band name is{$music1>getName()}.”;

//The band name is Led Zepplin
//////////////////////////////////////////////////////////////// /\///\/_//\ /////////////////////////////////////////////////////////
<!-- EXAMPLE 6 -->
<!--
class Nature {
	protected $tree="oak";
	protected $fruit="apple";
	protected $vegetable="Artichoke";
	protected $flower="Cherry Blossom";
	public $price = 0;

	function getName() {
	return “{$this>
	firstName}” .
	“{$this>
	lastName}”;
	}
}

$nature1 = new Nature();
$nature1>firstName = “Oak”;
$nature1>lastName = “Tree”;
print “The tree name is {$nature1>getName()}.”;

//The tree name is Oak Tree
//////////////////////////////////////////////////////////////// /\///\/_//\ /////////////////////////////////////////////////////////
<!-- LECTURE 2 -->
<!-- EXAMPLE 1 -->
<?php
class Soccer{
	public $firstName;
	public $lastName;
	public $position;

	function __construct($firstName, $lastName, $position){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->position = $position;
	}

	function getName(){
		return $this->firstName . $this->lastName;
	}
}

$player = new Soccer("Andrea ", "Pirlo", "Center attacking mid");
	print "Soccer 1:" . $player->getName();

	class Basketball{
	public $firstName;
	public $lastName;
	public $position;

	function __construct($firstName, $lastName, $position){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->position = $position;
	}

	function getName(){
		return $this->firstName . $this->lastName;
	}
}

$player = new Soccer("Kobe ", "Bryant", "Center attacking mid");
	print "Basketball 1:" . $player->getName();

	class Baseball{
	public $firstName;
	public $lastName;
	public $position;

	function __construct($firstName, $lastName, $position){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->position = $position;
	}

	function getName(){
		return $this->firstName . $this->lastName;
	}
}

$player = new Soccer("Derek ", "Jeter", "Shortstop");
	print "Baseball 1:" . $player->getName();
?>