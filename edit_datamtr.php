<?php
include("koneksi.php");

if (!isset($_GET['plat_motor'])) {
	header('Location: tampil_datamtr.php');
}

$plat_motor = $_GET['plat_motor'];

$sql = "SELECT * FROM motor_tb WHERE plat_motor = '$plat_motor'";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
	$data = mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Form Edit</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

	<div class="col-md-6 mx-auto mt-5 container">
		<div class="card">
			<div class="card-header bg-primary text-white">Form Input List motor Terbaru</div>
			<div class="card-body">

				<form action="proses-edit.php" method="POST">
					<div class="mb-3">
						<label for="exampleFormControlplat_motor" class="form-label">plat_motor</label>
						<input type="number" class="form-control" name="plat_motor" id="exampleFormControlplat_motor" value="<?php echo ($data['plat_motor']); ?>">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlnama_motor" class="form-label">nama_motor</label>
						<input type="text" class="form-control" name="nama_motor" id="exampleFormControlnama_motor" value="<?php echo ($data['nama_motor']); ?>">
					</div>

					<div class="mb-3">
						<label for="exampleFormControltype_motor" class="form-label">type_motor</label>
						<input type="text" class="form-control" name="type_motor" id="exampleFormControltype_motor" value="<?php echo ($data['type_motor']); ?>"">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlharga_motor" class="form-label">harga_motor</label>
						<input type="text" class="form-control" name="harga_motor" id="exampleFormControlharga_motor" value="<?php echo ($data['harga_motor']); ?>"">

					</div>

					<button type="submit" class="btn btn-primary">Submit</button>





			</div>



			</form>
		</div>
	</div>
	</div>


</body>

</html>