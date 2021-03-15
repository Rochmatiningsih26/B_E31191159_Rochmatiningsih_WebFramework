<?php 
class Rectangle implements shape{
	private $width;
	private $height;

	public function __construct($width, $height)
	{
		$this-> width = $width;
		$this-> height = $height;
	}

	public function calcArea()
	{
		return $this -> width = $this -> height;
	}
}

$circ = new Circle(2);
$rect = new Rectangle(3,4);

echo $circ -> calcArea();
echo $rect -> calcArea();

 ?>