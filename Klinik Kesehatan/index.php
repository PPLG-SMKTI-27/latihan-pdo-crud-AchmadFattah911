<?php
require_once "Pasien.php";

$pasien = new Pasien();

// CREATE
// $pasien->createPasien("Raka", "18", "JL. AWS", "081199330011");

// READ
echo "<h3>Data Pasien</h3>";
$data = $pasien->readPasien();
foreach ($data as $row) {
    echo $row['id_pasien'] . $row['nama'] . $row['umur'] . $row['alamat'] . $row['telepon']. "\n";
}

// UPDATE
$pasien->updatePasien(1,"Farrelazam", "18", "Jln. Juanda", "082137321832");

// DELETE
// $pasien->deletePasien(8);
?>
