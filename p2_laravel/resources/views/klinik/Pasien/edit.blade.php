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
						<strong>Edit Data Pasien</strong>
					</div>
					<div class="card-body">
						<form action="{{ route('datapasiens.update', $datapasien->id_pasien) }}" method="POST">
							@csrf
							@method('PUT')
							<div class="form-group">
                                <label>NAMA PASIEN</label>
                                <input type="text" name="nama_pasien" placeholder="Masukan Nama Pasien" value="{{ $datapasien->nama_pasien }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>TEMPAT TANGGAL LAHIR</label>
                                <input type="text" name="ttl" placeholder="Masukan Tanggal Lahir" value="{{ $datapasien->ttl }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>UMUR</label>
                                <input type="text" name="umur" placeholder="Masukan Umur Pasien" value="{{ $datapasien->umur }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <input type="text" name="jk" placeholder="Masukan Jenis Kelamin" value="{{ $datapasien->jk }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" placeholder="Masukan Nama Pasien" value="{{ $datapasien->alamat }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>TANGGAL DATANG</label>
                                <input type="text" name="tgl_datang" placeholder="Masukan Tanggal Datang" value="{{ $datapasien->tgl_datang }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>GEJALA</label>
                                <input type="text" name="gejala" placeholder="Masukan Gejala Pasien" value="{{ $datapasien->gejala }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                    <!-- <label>NAMA PENYAKIT</label>
                                    <input type="text" name="nama_penyakit" placeholder="Masukan Nama Penyakit" class="form-control" value="{{ $datapasien->nama_penyakit }}" required> -->
                                    <label>NAMA PENYAKIT</label>
                                    <select name="penyakit_id" class="form-control" required>
                                        <option value="" disabled selected>-- Pilih Penyakit --</option>
                                        @foreach($datapenyakits as $dtp)
                                            <option {{ $datapasien->penyakit_id == $dtp->id_penyakit ? "selected" : "" }} value="{{ $dtp->id_penyakit }}">{{ $dtp->nama_penyakit }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <!-- <label>NAMA OBAT</label>
                                    <input type="text" name="nama_obat" placeholder="Masukan Nama Penyakit" class="form-control" value="{{ $datapasien->nama_obat }}" required> -->
                                    <label>NAMA OBAT</label>
                                    <select name="obat_id" class="form-control" required>
                                        <option value="" disabled selected>-- Pilih Obat --</option>
                                        @foreach($dataobats as $dot)
                                            <option {{ $datapasien->obat_id == $dot->id_obat ? "selected" : "" }} value="{{ $dot->id_obat }}">{{ $dot->nama_obat }}</option>
                                        @endforeach
                                    </select>
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