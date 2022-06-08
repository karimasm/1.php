<!doctype html>
<html>

<head>
    <!-- Title -->
    <title>Home</title>
</head>

<body>
	<h2>Contoh Fungsi 1</h2>
	
	<?php
		function lihatNama($nama, $tanggalLahir) {
			echo "Nama saya adalah $nama. Saya lahir pada tanggal $tanggalLahir <br>";
		}

		$nama = "Luqman";
		$tanggalLahir = "12 Maret 2000";
		lihatNama($nama, $tanggalLahir);
		lihatNama("Lulu", "12 Maret 2010");
	?>


	<h2>Contoh Fungsi 2</h2>
	
	<?php
		function cetakString($string, $berapaKali) {
			for ($x = 0; $x < $berapaKali; $x++) {
		    	echo "$string <br>";
			}
		}

		cetakString("Saya belum makan", 5);
	?>

	<h2>Contoh Fungsi 3</h2>
 	
 	<?php
		function hitungGaji($gajiAwal) {

			$gajiAkhir = $gajiAwal - ($gajiAwal*10/100);
			$gajiAkhir = $gajiAkhir + 500000;
			return $gajiAkhir;
		}

		echo hitungGaji(1000000). "<br>";

		echo hitungGaji(10000000). "<br>";

	?>



</body>

</html>



