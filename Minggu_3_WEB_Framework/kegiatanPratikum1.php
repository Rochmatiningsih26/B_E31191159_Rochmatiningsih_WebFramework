<?php 
class Car {

	//public methods dan property
	public $model;

	public function getModel()
	{
		return "The car model is " . $this->model;
	}
}

$mercedes = new Car();
//akses property dari dalam class
$mercedes -> model = "Mercedes Benz";

//akses property dari luar class
echo $mercedes -> getModel();
	 ?>
