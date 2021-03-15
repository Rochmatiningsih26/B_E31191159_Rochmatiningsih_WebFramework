<?php 

abstract class Car{

	protected $tankvolume;

	public function setTankVolume($volume)
	{
		$this->tankvolume = $volume;
	}

	abstract public function calNumMilesOnFullTank();
}
 ?>
