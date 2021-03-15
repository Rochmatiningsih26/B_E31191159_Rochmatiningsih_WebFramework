<?php 

class Circle implements shape{
private $radius;

public function __construct($radius)
{
	$this->radius = $radius;
}

//calArea calsulates the area
public function calcaArea()
{
	return $this->radius = $this->radius * pi();
}
}
 ?>

