<?php
//deklarasi class
class kendaraan 
	{

    // deklarasi property
    	var $jenis_kendaraan;
	    var $jumlah_roda;
	    var $merk;
	    var $bahan_bakar = 'Premium';
	    var $harga; 
	    var $tahun_pembuatan = 2004;

	// deklarasi function
	    function dapatSubsidi()
	    {
	    	if ($this->bahan_bakar = 'Premium' && $this->tahun_pembuatan < 2005) $subsidi = 'Ya';
	    	else $subsidi = 'Tidak';
	    	return $subsidi;
	    }

    }

    //deklarasi objek
    $mobil = new kendaraan();
    $motor = new kendaraan();

    echo $mobil -> bahan_bakar = 'Solar';
    echo "<br />";
    echo $mobil -> tahun_pembuatan = 2010;
    echo "<br />";
    echo $mobil -> dapatSubsidi();
    echo "<hr />";

	echo $motor -> bahan_bakar = 'Premium';
    echo "<br />";
    echo $motor -> tahun_pembuatan = 2004;
    echo "<br />";
    echo $motor -> dapatSubsidi();
    echo "<hr />";
  ?>
