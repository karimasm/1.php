<!doctype html>
<html>

<head>
    <title>Contoh Loop</title>
</head>

<body>
	
	<?php
		echo "<h3>10 rekomendasi tempat wisata</h3>";

		$x = 1;

		while ($x <= 10) {
			echo "Rekomendasi tempat wisata " . $x . "<br>";
			$x = $x + 1;
		}



	?>

   
</body>

</html>
