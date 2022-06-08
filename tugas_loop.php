<?php

# Buat 10 objek pelamar kerja

class PelamarKerja {
    function PelamarKerja($nama, $umur, $status) {
        $this -> nama = $nama;
        $this -> umur = $umur;
        $this -> status = $status;
    }
}

$pelamarKerja1 = new PelamarKerja("Acha", 20, "-");
$pelamarKerja2 = new PelamarKerja("Beni", 15, "-");
$pelamarKerja3 = new PelamarKerja("Citra", 16, "-");
$pelamarKerja4 = new PelamarKerja("Dina", 45, "-");
$pelamarKerja5 = new PelamarKerja("Eros", 29, "-");
$pelamarKerja6 = new PelamarKerja("Fitrah", 27, "-");
$pelamarKerja7 = new PelamarKerja("Gifari", 30, "-");
$pelamarKerja8 = new PelamarKerja("Hanafi", 20, "-");
$pelamarKerja9 = new PelamarKerja("Ihsan", 40, "-");
$pelamarKerja10 = new PelamarKerja("Jana", 50, "-");

# Masukkan objek ke dalam array

$kumpulanPelamarKerja = [$pelamarKerja1, $pelamarKerja2, $pelamarKerja3, $pelamarKerja4, $pelamarKerja5, $pelamarKerja6, $pelamarKerja7, $pelamarKerja8, $pelamarKerja9, $pelamarKerja10];

# iterasi pelamar kerja dengan foreach

foreach ($kumpulanPelamarKerja as $pelamar) {
    # ubah status sesuai umur pelamar
    if ($pelamar -> umur > 17 && $pelamar -> umur <= 30) {
        $pelamar -> status = "Lolos seleksi";
    }
    else {
        $pelamar -> status = "Tidak Lolos seleksi";
    }

    # cetak data setiap pelamar
    echo $pelamar -> nama . " - " . $pelamar -> umur . " - " . $pelamar -> status . "<br>";

}

?>
