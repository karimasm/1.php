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

			$queryMasukkanCustomer = "INSERT INTO customer (nama, email, alamat) 
			VALUES ('karima', 'karima@mail.com', 'Jalan pelita dalam, jakarta')";
		    $stmt = $conn->prepare($queryMasukkanCustomer); 
		    $stmt->execute();
		    
		    echo "Data berhasil dimasukkan";


		// Contoh read atau select

		$queryAmbilCustomer = "SELECT * FROM customer";
		$stmt = $conn->prepare($queryAmbilCustomer); 
		$stmt->execute();
		
		foreach($stmt->fetchAll() as $customer) { 
	        echo $customer["nama"]. " | ". $customer["email"]. " | ". $customer["alamat"]. "<br>";
	    }
		
		// Contoh update

	    $queryEditCustomer = "update customer set nama='ini', email='inikarima@mail.id' WHERE id=1";
		$stmt = $conn->prepare($queryEditCustomer); 
		$stmt->execute();
		echo "Update berhasil";


		// Contoh delete

		$queryHapusCustomer = "delete from customer WHERE id='2'";
		$stmt = $conn->prepare($queryHapusCustomer); 
		$stmt->execute();
		echo "delete berhasil";

		

	
		// jika sudah selesai melakukan koneksi ke database, tutup koneksi dengan membuat menjadi null
		$conn = null;



	?>



</body>

</html>