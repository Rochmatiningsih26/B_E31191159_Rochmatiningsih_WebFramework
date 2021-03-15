<?php 

//the perent class
class Car{
	//private property inside the class
	private $model;

	//public setter method
	public function setModel($model)
	{
		$this->model = $model;
	}

	public function hello()
	{
		return "beep!  I am a <i>" . $this->model . "<br />";
	}
}


//the child class inheriten the code from the parent class
class SportsCar extends Car{
	//no code in the child class
}

//create an instance from the child class
$sportsCar1 = new SportsCar();

$sportsCar1 -> setModel('Mercedes Benz');

echo $sportsCar1->hello();
 ?>

