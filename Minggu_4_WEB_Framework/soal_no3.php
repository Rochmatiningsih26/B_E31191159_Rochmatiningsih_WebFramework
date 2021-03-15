<?php
// buat class induk: Tablet
class tablet {
 
   public $merk;
   public $camera;
   public $memory;
 
}
 
// turunkan class tablet ke handphone
class handphone extends tablet {
	public $handphone_baru;
 
   public function beli_handphone() {
     return "Beli Handphone Baru: $this->handphone_baru <br /> merk: $this->merk <br />  camera: $this->camera <br /> memory: $this->memory";
   }
}
 
// buat objek dari class handphone (instansiasi)
$handphone1 = new handphone();
 
// isi property objek
$handphone1->handphone_baru = "Android";
$handphone1->merk = "Apple";
$handphone1->camera ="5 Pixel";
$handphone1->memory = "8 GB";
 
//panggil method objek
echo $handphone1->beli_handphone();
?>