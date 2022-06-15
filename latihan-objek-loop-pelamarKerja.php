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

	// function cekLulus("ini test mimpi") {
	// 	if($cekPelamar->status == true) {
	// 		echo "Hasil cek pelamar dengan nama $peserta->name lulus <br>";
	// 	} else {
	// 		echo "Hasil cek pelamar dengan nama $peserta->name tidak lulus <br>";
	// 	}
	// }

	//deklarasi object baru dan isinya
	$pelamar1 = new pelamar("ini test mimpi", 20, false);
	$pelamar2 = new pelamar("ehe", 23, false);
	$pelamar3 = new pelamar("matamu", 63, false);
	$pelamar4 = new pelamar("janai", 23, false);
	$pelamar5 = new pelamar("urusai", 23, false);
	$pelamar6 = new pelamar("shhhh", 23, false);
	$pelamar7 = new pelamar("eye", 23, false);
	$pelamar8 = new pelamar("nice", 13, false);
	$pelamar9 = new pelamar("gl", 33, false);
	$pelamar10 = new pelamar("yes", 23, false);

	$daftarPeserta = array($pelamar1, $pelamar2 , $pelamar3, $pelamar4, $pelamar5, $pelamar6, $pelamar7, $pelamar8, $pelamar9, $pelamar10);

	foreach ($daftarPeserta as $peserta) {	
		if ($peserta->age > 17 & $peserta->age < 30) {
			$peserta->status = true;
			{
				echo "<br> Hasil cek pelamar dengan nama $peserta->name lulus <br>";
				var_dump($peserta->status);
			} 
		}
		else {
			// echo "peserta ini berusia $peserta->age , maka $peserta->name tidak lulus <br>";
			echo "<br> Hasil cek pelamar dengan nama $peserta->name tidak lulus <br>";
			var_dump($peserta->status);
		}
	}	


	foreach ($daftarPeserta as $peserta1) {	
		if ($peserta1->age > 17 & $peserta1->age < 30) {
			$peserta1->status = true;
			echo "<br> peserta ini berusia $peserta1->age , maka $peserta1->name lulus <br>";
		}
		else {
			echo "<br> peserta ini berusia $peserta1->age , maka $peserta1->name tidak lulus <br>";
		}
	}
	
	
		
?>

</body>
</html>