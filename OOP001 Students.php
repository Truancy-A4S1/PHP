<?php
// Parent class Students
class Students{
	// Parent class properties
	public $firstname;
	public $lastname;
	public $course;
	public $year;

	//Parent class constructor and methods
	public function __construct($firstname, $lastname, $course, $year)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->course = $course;
		$this->year = $year;
	}

	public function print_profile()
	{
		echo "Name: ".$this->firstname." ".$this->lastname."<br>Course and Year: ".$this->course."-".$this->year."<br>";
	}

	public function print_fullname()
	{
		echo $this->firstname . " " . $this->lastname . "<br>";
	}
}


$flor = new Students("Flor","rilyn","BSCS","II");
$jam = new Students("Jam","mes","BSCS","II");

echo "<hr>Student Object: ";
echo $flor->print_fullname();
echo $flor->print_profile();

echo "<hr>Student Object: ";
echo $jam->print_fullname();
echo $jam->print_profile();

// CS Students inherits properties from Students
Class ComSci_Students extends Students{
	//CS Students properties
	public $favorite_language;

	//CS Students constructor and methods
	public function __construct($firstname, $lastname, $course, $year, $favorite_language){
		//Notice that $firstname, $lastname, $course, $year is parent's properties
		//Since parent class has its own constructor, so we can call it to initialize the properties of its child class
		parent::__construct($firstname, $lastname, $course, $year);

		//Then set the properties of the child class
		$this->favorite_language = $favorite_language;
	}

	public function show_language()
	{
		echo "My favorite language is: " . $this->favorite_language . "<br>";
	}

}

$art = new ComSci_Students("Art","thur","BSCS","II", "SQL");
$tat = new ComSci_Students("Tat","ten","BSCS","II", "Python");

echo "<hr>ComSci Student Object: ";
//Notice that we can use print_fullname and print_profile methods from Students class even if they are not defined inside ComSci_ Students class...
echo $art->print_fullname();
echo $art->print_profile();
echo $art->show_language();


echo "<hr>ComSci Student Object: ";
echo $tat->print_fullname();
echo $tat->print_profile();
echo $tat->show_language();


// PE Students inherits properties from Students
class PE_Students extends Students{
	public $favorite_activity;

	public function __construct($firstname, $lastname, $course, $year, $favorite_activity){
		parent::__construct($firstname, $lastname, $course, $year);

		$this->favorite_activity = $favorite_activity;
	}

	public function show_activity()
	{
		echo "My favorite activity is " . $this->favorite_activity . "<br>";
	}

}

$pat = new PE_Students("Pat","trick","UPESR","III","Basketball");
$job = new PE_Students("Job","ba","UPESR","II","H");

echo "<hr>PE Student Object: ";
echo $pat->print_fullname();
echo $pat->print_profile();
echo $pat->show_activity();

echo "<hr>PE Student Object: ";
echo $job->print_fullname();
echo $job->print_profile();
echo $job->show_activity();

?>
