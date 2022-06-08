<!DOCTYPE html>
<html>
<body>

<?php
	// object baru namanya Buku
	class Buku {
	    function Buku($judul, $pengarang, $jumlahHalaman) {
	        $this->judul = $judul;
	        $this->pengarang = $pengarang;
	        $this->jumlahHalaman = $jumlahHalaman;
	    }
	}


	$buku1 = new Buku("Menggapai mimpi", "andi", 100);

	$buku2 = new Buku("mulai bisnis makanan", "abrar", 300);

	
	echo $buku1->judul.' '.$buku1->pengarang . "<br>";
	echo $buku1->pengarang . "<br>";
	echo $buku1->jumlahHalaman . "<br>";

	
	

?>

</body>
</html>