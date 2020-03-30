<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Edit Data</title>
</head>
<body>
	<div class="container" style="margin-top: 80px">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<strong>Edit Data Penyakit</strong>
					</div>
					<div class="card-body">
						<form action="{{ route('dataobats.update', $dataobat->id_obat) }}" method="POST">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label>NAMA OBAT</label>
								<input type="text" name="nama_obat" placeholder="Masukan Nama Obat" value="{{ $dataobat->nama_obat }}" class="form-control">
							</div>
							<div class="form-group">
								<label>NAMA_PENYAKIT</label>
								<input type="text" name="nama_penyakit" placeholder="Masukan nama penyakit " value="{{ $dataobat->nama_penyakit }}" class="form-control">
								
							</div>
							<button type="submit" class="btn btn-success">UPDATE</button>
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
	<script>
		CKEDITOR.replace( 'content' );
	</script>
</body>
</html>