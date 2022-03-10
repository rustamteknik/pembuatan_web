<?php

$nama_motor = $_POST['nama_motor'];
$plat_motor = $_POST['plat_motor'];
$type_motor = $_POST['type_motor'];
$harga_motor = $_POST['harga_motor'];



include('koneksi.php');


$sql = "INSERT INTO motor_tb (nama_motor, plat_motor, type_motor, harga_motor) VALUES ('$nama_motor ', '$plat_motor', '$type_motor', '$harga_motor')";

if (mysqli_query($conn, $sql)) {
	header('Location: tampil_datamtr.php');
} else {
	echo "Data gagal di simpan" . $sql . "<br>" . mysqli_error($koneksi);
}
