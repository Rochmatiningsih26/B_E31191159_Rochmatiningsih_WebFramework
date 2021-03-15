<?php 
class Item{
	private $ukuran;
	private $warna;
	private $nama;
}

class Topi extends Item{
	
	function modelTopi()
	{
		$this -> ukuran = 11;
		$this -> warna = 'Hitam';
		$this -> nama = 'GUCCI';
		return "Nama topi ".$this -> nama." warna ".$this -> warna." ukuran ".$this -> ukuran;
	}
}

class Celana extends Item {
	
	function tipeCelana()
	{
		$this -> ukuran = 36;
		$this -> warna = 'Grey';
		$this -> nama = 'ZARA';
		return "Nama tipe celana ".$this -> nama." warna ".$this -> warna." ukuran ".$this -> ukuran;
	}
	
	function modelCelana()
	{
		$this -> ukuran = 37;
		$this -> warna = 'White';
		$this -> nama = 'Joger';
		return "Nama model celana ".$this -> nama." warna ".$this -> warna." ukuran ".$this -> ukuran;
	}
}

class Baju extends Item {
	
	function tipeBaju()
	{
		$this -> ukuran = 'M';
		$this -> warna = 'Peach';
		$this -> nama = 'H&M';
		return "Nama tipe baju ".$this -> nama." warna ".$this -> warna." ukuran ".$this -> ukuran;
	}
}

$topi = new Topi();
$tipecelana = new Celana();
$modelcelana = new Celana();
$tipebaju = new Baju();

echo $topi -> modelTopi();
echo "<br/>";
echo $tipecelana -> tipeCelana();
echo "<br/>";
echo $modelcelana -> modelCelana();
echo "<br/>";
echo $tipebaju -> tipeBaju();
echo "<br/>";
?>
