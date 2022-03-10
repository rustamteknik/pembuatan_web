<?php

include("koneksi.php");

if(isset($_GET['plat_motor']) ){
	$plat_motor = $_GET['plat_motor'];

	$sql = "DELETE FROM motor_tb WHERE plat_motor = '$plat_motor' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		header('Location: tampil_datamtr.php');
	}
	else{
		echo "gagal Menghapus...";
	}

} else{
	echo "Akses Di larang";
}
