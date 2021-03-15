<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   public $pemilik;
   public $merk;
  
   // buat method untuk class laptop
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
   }
  
   public function matikan_laptop() {
     return "Matikan Laptop $this->merk punya $this->pemilik";
   }
  
   public function restart_laptop() {
     $matikan=$this->matikan_laptop();        
     $hidupkan= $this->hidupkan_laptop();
     $restart=$matikan."<br />".$hidupkan;
     return $restart;
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop1 = new laptop();
  
// isi property objek
$laptop1->pemilik="Rochmatiningsih";
$laptop1->merk="Asus";
  
  
echo $laptop1->hidupkan_laptop();
// hasil: "Hidupkan Laptop Asus punya Anto";
  
echo "<br />";
  
echo $laptop1->matikan_laptop();
// hasil: "Matikan Laptop Asus punya Anto";
  
echo "<br />";
  
echo $laptop1->restart_laptop();
// hasil:
// "Matikan Laptop Asus punya Anto";
// "Hidupkan Laptop Asus punya Anto";
?>