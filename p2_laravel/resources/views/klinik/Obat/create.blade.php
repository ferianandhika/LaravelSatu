<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Tambah Data</title>
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<strong>Tambah Data Obat</strong>
					</div>
					<div class="card-body">
						<form action="{{ route('dataobats.store') }}" method="POST">
							@csrf
							
							<div class="form-group">
								<label>NAMA OBAT</label>
								<input type="text" name="nama_obat" placeholder="Masukan Nama obat" class="form-control" required>
							</div>
							<div class="form-group">
								<label>NAMA PENYAKIT</label>
								<!-- <input type="text" name="kelas" placeholder="Masukan GEJALA PENYAKIT" class="form-control" required> -->
								<textarea type="text" name="nama_penyakit" placeholder="Masukan nama_penyakit" class="form-control" required rows="5"></textarea>
							</div>
							<button type="submit" class="btn btn-success">SIMPAN</button>
							<button type="reset" class="btn btn-warning">RESET</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<!-- <script>
		CKEDITOR.replace( 'content' );
	</script> -->

</body>
</html>