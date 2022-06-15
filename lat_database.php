<!doctype html>
<html>

<head>
    <!-- Title -->
    <title>Home</title>
</head>

<body>


	<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "1.php";

		try {
		    
			// untuk koneksi ke database
		    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		    // jika ada error, akan menjadi exception dan akan ditangkap catch
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    
		    echo "Berhasil Terkoneksi <br>";

		}
		catch(PDOException $e)
		{
		    echo "Koneksi gagal: " . $e->getMessage();
		}


		// Contoh Insert

			$queryMasukkanLatihan = "INSERT INTO latihan (nama, email, alamat) 
			VALUES ('karima', 'karima@mail.com', 'Jalan pelita dalam, jakarta')";
		    $stmt = $conn->prepare($queryMasukkanLatihan); 
		    $stmt->execute();
		    
		    echo "Data berhasil dimasukkan";


		// // Contoh read atau select

		$queryAmbilLatihan = "SELECT * FROM latihan";
		$stmt = $conn->prepare($queryAmbilLatihan); 
		$stmt->execute();
		
		foreach($stmt->fetchAll() as $latihan) { 
	        echo $latihan["nama"]. " | ". $latihan["email"]. " | ". $latihan["alamat"]. "<br>";
	    }
		
		// // Contoh update

	    $queryEditLatihan = "update latihan set nama='ini', email='inikarima@mail.id' WHERE id=1";
		$stmt = $conn->prepare($queryEditLatihan); 
		$stmt->execute();
		echo "Update berhasil";


		// // Contoh delete

		$queryHapusLatihan = "delete from latihan WHERE id='2'";
		$stmt = $conn->prepare($queryHapusLatihan); 
		$stmt->execute();
		echo "delete berhasil";

	
		// jika sudah selesai melakukan koneksi ke database, tutup koneksi dengan membuat menjadi null
		$conn = null;



	?>



</body>

</html>