<?php 

class mobilLengkap {
	public function nontonTV()
	{
		
	}
}

class mobilBMW extends mobilLengkap {
	public function nontonTV()
	{
		return "TV dihidupkan" . "TV Mencari Channel" . "TV Menampilkan Gambar";
	}
}

class mobilBMWberaksi extends mobilLengkap {
	public function nontonTv()
	{
		return "Matikan Mobil" . "Hidupkan Mobil" . "Ubah Gigi";
	}
}


$mobil1 = new mobilBMW();
$mobil2 = new mobilBMWberaksi();

echo $mobil1 -> nontonTV() . "<br />";
echo $mobil2 -> nontonTv();
 ?>

