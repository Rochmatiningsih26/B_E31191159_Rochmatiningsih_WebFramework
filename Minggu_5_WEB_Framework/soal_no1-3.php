<?php
interface hitungLuas{
	public function hitungLuasPersegi();
	public function hitungLuasSegitiga();
	public function hitungLuasLingkaran();
}

class persegi implements hitungLuas{
	public $sisi = 8;
	
	public function hitungLuasPersegi()
	{
		return $this -> sisi * $this -> sisi;
    }
	
	public function hitungLuasSegitiga(){}
	public function hitungLuasLingkaran(){}
}

class segitiga implements hitungLuas{
	public $alas = 2;
	public $tinggi = 4;
	
	public function hitungLuasSegitiga()
	{
		return 1/2 * $this -> alas * $this -> tinggi;
    }
	
	public function hitungLuasPersegi(){}
	public function hitungLuasLingkaran(){}
}

class lingkaran implements hitungLuas{
	public $jari = 14;
	
	public function hitungLuasLingkaran()
	{
		return pi()* $this -> jari * $this -> jari;
    }
	
	
	public function hitungLuasPersegi(){}
	public function hitungLuasSegitiga(){}
}

$persegi = new Persegi();
echo 'Luas Persegi = '. $persegi->hitungLuasPersegi(); 
echo "<br>";

$segitiga = new Segitiga();
echo 'Luas Segitiga = '.$segitiga->hitungLuasSegitiga();
echo "<br>";

$lingkaran = new Lingkaran();
echo 'Luas Lingkaran = '.$lingkaran->hitungLuasLingkaran();
echo "<br>";
?>