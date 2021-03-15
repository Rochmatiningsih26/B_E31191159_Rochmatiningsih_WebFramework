<?php
//deklarasi class
class kendaraan 
	{

    // deklarasi property
    	var $jenis_kendaraan;
	    var $jumlah_roda;
	    var $merk;
	    var $bahan_bakar;
	    var $harga; 
	    var $tahun_pembuatan;

	// deklarasi function
	    function dapatSubsidi()
	    {
	    	if ($this->bahan_bakar = 'Premium' && $this->tahun_pembuatan < 2005) $subsidi = 'Ya';
	    	else $subsidi = 'Tidak';
	    	return $subsidi;
	    }
        function hargaSecond() {
            if ($this->tahun_pembuatan > 2010)
                $second = $this->harga * 20/100;
            elseif ($this->tahun_pembuatan >=2010)
                $second = $this->harga * 30/100;
            else 
                $second = $this->harga * 40/100;
                return $second;
        }
    }

    //deklarasi objek
    $mobil = new kendaraan();
    $motor = new kendaraan();

    echo $mobil -> harga = 12000000;
    echo "<br />";
    echo $mobil -> bahan_bakar = 'Solar';
    echo "<br />";
    echo $mobil -> tahun_pembuatan = 2010;
    echo "<br />";
    echo $mobil -> dapatSubsidi();
    echo "<br />";
    echo $mobil -> hargaSecond();

    echo "<hr />";

    echo $motor -> harga = 10000000;
    echo "<br />";
	echo $motor -> bahan_bakar = 'Premium';
    echo "<br />";
    echo $motor -> tahun_pembuatan = 2004;
    echo "<br />";
    echo $motor -> dapatSubsidi();
    echo "<br />";
    echo $motor -> hargaSecond();
    echo "<hr />";
  ?>
