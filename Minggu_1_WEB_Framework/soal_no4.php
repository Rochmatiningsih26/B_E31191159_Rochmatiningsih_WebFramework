<?php
class Motor
{
    public $owner;
    public $warna;
    public $merk;
    public $tahun_keluar;
    public $bahan_bakar;
 
    public function Warna()
    {
        $this->warna = 'Orange';
        return $this->warna;
    }
    public function Owner()
    {
        $this->owner = 'Rochmatiningsih';
        return $this->owner;
    }
    public function Merk()
    {
        $this->merk = 'VARIO 125';
        return $this->merk;
    }
    public function Tahun_keluar()
    {
        $this->tahun_keluar = '2014';
        return $this->tahun_keluar;
    }
}
 
$motor1 = new Motor();
 
 
echo "Pemilik :" .  $motor1-> Owner() . "<br>Warna :" .
    $motor1-> Warna() . "<br>Merk :" .
    $motor1-> Merk()  .  "<br>Tahun Keluar :" .
    $motor1-> Tahun_keluar(); 