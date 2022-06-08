<!doctype html>
<html>
<head>
    <title>Kelas PHP</title>
</head>

<body>
	
	<?php
		
		$umur = 15;
		$jenisKelamin = "laki-laki";		
		$sudahMenikah = true;

		if ($sudahMenikah and $umur > 17) {
			echo "sudah bisa memiliki SIM";
		}
		else if ($jenisKelamin == "perempuan") {
			echo "Bisa memiliki sim";
		}
		else {
			echo "Belum bisa memiliki SIM";
		}
	
		
	?>

   
</body>

</html>
