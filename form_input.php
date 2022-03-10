<!DOCTYPE html>
<html>

<head>
	<title>Form Input Mahasiswa</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>



	<div class="col-md-6 mx-auto mt-5 container">
		<div class="card">
			<div class="card-header bg-primary text-white">Form Input List motor Terbaru </div>
			<div class="card-body">

				<form action="proses-simpan.php" method="POST">

					<!-- <div class="mb-3">
						<label for="exampleFormControlID" class="form-label">ID</label>
						<input type="number" class="form-control" name="ID" id="exampleFormControlID" placeholder="ID">
					</div> -->

					<div class="mb-3">
						<label for="exampleFormControlMerek_Hp" class="form-label">nama_motor</label>
						<input type="text" class="form-control" name="nama_motor" id="exampleFormControlMerek_Hp" placeholder="nama_motor">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlDeskripsi" class="form-label">plat_motor</label>
						<input type="text" class="form-control" name="plat_motor" id="exampleFormControlDeskripsi" placeholder="plat_motor">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlHarga" class="form-label">type_motor</label>
						<input type="text" class="form-control" name="type_motor" id="exampleFormControlHarga" placeholder="type_motor">

					</div>

					<div class="mb-3">
						<label for="exampleFormControlStok" class="form-label">harga_motor</label>
						<input type="number" class="form-control" name="harga_motor" id="exampleFormControlStok" placeholder="harga_motor">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>





				</form>
			</div>
		</div>
	</div>


</body>

</html>