<?php 

class Car {

	protected $model;


	public function setModel($model)
	{
		$this->model = $model;
	}
}


class SportCar extends Car {
	public function hello()
	{
		return "Beep! I am a <i>" . $this->model . "<br />";
	}
}


$sportsCar1 = new SportCar();
$sportsCar1 -> setModel('Mercedes Benz');
 ?>

