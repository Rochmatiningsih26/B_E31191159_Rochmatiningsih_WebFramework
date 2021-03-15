<?php 

class Car {
	public function hello()
	{
		return "beep";
	}
}


class SportCar extends Car {
	public function hello()
	{
		return "Hallo";
	}
}


$sport1 = new SportCar();

echo $sport1 -> hello();
 ?>

