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
	$pelamar3 = new pelamar("matamu", 63, false);
	$pelamar4 = new pelamar("ehe", 23, true);
	$pelamar5 = new pelamar("matamu", 23, false);
	$pelamar6 = new pelamar("ehe", 23, true);
	$pelamar7 = new pelamar("matamu", 23, false);
	$pelamar8 = new pelamar("ehe", 13, true);
	$pelamar9 = new pelamar("matamu", 33, false);
	$pelamar10 = new pelamar("ehe", 23, true);


	$daftarPeserta = array($pelamar1, $pelamar2 , $pelamar3, $pelamar4, $pelamar5, $pelamar6, $pelamar7, $pelamar8, $pelamar9, $pelamar10);
    foreach ($daftarPeserta as $peserta) {
		    
			if ($peserta->age > 17 & $peserta->age < 30) {
			echo "peserta ini berusia ". $peserta->age. ", maka ". $peserta->name. " lulus <br>";			}
			else {
			echo "peserta ini berusia ". $peserta->age. ", maka ". $peserta->name. " tidak lulus <br>";              }			
		}
?>

</body>
</html>