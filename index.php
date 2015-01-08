<!-- LECTURE 1 -->
<!-- EXAMPLE 1 -->
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
class Soccer {
	public $firstName;
	public $lastName;
	public $position;

	function __construct($title, $firstName, $lastName, $position) {
	$this>firstName = $firstName;
	$this>lastName = $lastName;
	$this>breed = $breed;
	}

	function getName() {
	return “{$this>firstName}” .
	“{$this>lastName}”;
	}

	$player1 = new Soccer(“Andrea”, “Pirlo”, “Center Attacking Mid”);
	print “Soccer 1: {$player1>getName()}\n;
}
//////////////////////////////////////////////////////////////// /\///\/_//\ /////////////////////////////////////////////////////////
<!-- EXAMPLE 2 -->
class Musician {
	public $firstName;
	public $lastName;
	public $instrument;

	function __construct($title, $firstName, $lastName, $instrument) {
	$this>firstName = $firstName;
	$this>lastName = $lastName;
	$this>breed = $instrument;
	}

	function getName() {
	return “{$this>firstName}” .
	“{$this>lastName}”;
	}

	$musician1 = new Musician(“Jimmy”, “Page”, “Guitar”);
	print “Musician 1: {$musician1>getName()}\n;
}
//////////////////////////////////////////////////////////////// /\///\/_//\ /////////////////////////////////////////////////////////
<!-- EXAMPLE 3 -->
class Tree {
	public $firstName;
	public $lastName;
	public $breed;

	function __construct($title, $firstName, $lastName, $breed) {
	$this>firstName = $firstName;
	$this>lastName = $lastName;
	$this>breed = $breed;
	}

	function getName() {
	return “{$this>firstName}” .
	“{$this>lastName}”;
	}

	$tree1 = new Tree(“Oak”, “Tree”, “Oak Tree”);
	print “Tree 1: {$tree1>getName()}\n;
}