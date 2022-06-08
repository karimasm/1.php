<!doctype html>
<html>

<head>
    <title>Contoh Loop</title>
</head>

<body>
	
	<?php
		echo "<h3>Contoh Foreach</h3>";

		$daftarPeserta = array("peserta1", "peserta2" , "peserta3", "peserta4", "peserta5");
		
		foreach ($daftarPeserta as $peserta) {
		    echo "Ini adalah ". $peserta. "<br>";
		}


	?>

   
</body>

</html>
