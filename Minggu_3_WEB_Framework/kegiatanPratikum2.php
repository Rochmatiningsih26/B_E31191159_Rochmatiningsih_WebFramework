<?php 
class Car {

	//private
	private $model;

	public function getModel()
	{
		return "The car model is " . $this->Model;
	}
}

$mercedes = new Car();

//akses property dari dalam class
$mercedes -> Model = 'Mercedes Benz';
//akses property dari luar class
echo $mercedes -> getModel();
	 ?>
