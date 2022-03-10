<?php

include('koneksi.php');
$plat_motor = $_POST['plat_motor'];
$nama_motor = $_POST['nama_motor'];
$type_motor = $_POST['type_motor'];
$harga_motor = $_POST['harga_motor'];
$sql = "UPDATE motor_tb SET nama_motor = '$nama_motor', plat_motor = '$plat_motor', type_motor = '$type_motor', harga_motor = '$harga_motor' WHERE plat_motor = '$plat_motor' ";


if (mysqli_query($conn, $sql)) {

	header('Location: tampil_datamtr.php');
} else {
	echo "Gagal menyimpan perubahan ...";
}
