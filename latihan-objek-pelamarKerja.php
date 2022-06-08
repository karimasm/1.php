<!DOCTYPE html>
<html>
<body>

<?php
	// deklarasi rangka object baru kosongan namanya Pelamar Kerja
	class pelamar {
	    function pelamar($nama, $umur, $status) {
	        $this->name = $nama;
	        $this->age = $umur;
	        $this->status = $status;
	    }
	}

	//deklarasi object baru dan isinya
	$pelamar1 = new pelamar("ini test mimpi", 20, false);
	$pelamar2 = new pelamar("ehe", 23, true);
	$pelamar3 = new pelamar("matamu", 23, false);
	$pelamar4 = new pelamar("ehe", 23, true);
	$pelamar5 = new pelamar("matamu", 23, false);
	$pelamar6 = new pelamar("ehe", 23, true);
	$pelamar7 = new pelamar("matamu", 23, false);
	$pelamar8 = new pelamar("ehe", 23, true);
	$pelamar9 = new pelamar("matamu", 23, false);
	$pelamar10 = new pelamar("ehe", 23, true);


	$daftarPeserta = array($pelamar1->name, $pelamar2->name , $pelamar3->name, $pelamar4->name, $pelamar5->name, $pelamar6->name, $pelamar7->name, $pelamar8->name, $pelamar9->name, $pelamar10->name);
		
		foreach ($daftarPeserta as $peserta) {
		    echo "Ini adalah ". $peserta. "<br>";
		}
		
		
		>17 tahun &  <=30 tahun then lulus
		else not
		show lulus and not each of them
		
		// if ($status = true) {
		// for	($peserta; $x > 17 & <=30; $peserta++) {
		// 	echo $peserta "lulus" "<br>";
		// 	}
		// } else {

		// }

?>

</body>
</html>