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
                        <strong>Tambah Data Pasien</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('datapasiens.store') }}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label>NAMA PASIEN</label>
                                <input type="text" name="nama_pasien" placeholder="Masukan Nama Pasien" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>TEMPAT TANGGAL LAHIR</label>
                                <input type="text" name="ttl" placeholder="Masukan Tanggal Lahir" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>UMUR</label>
                                <input type="text" name="umur" placeholder="Masukan Umur Pasien" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <input type="text" name="jk" placeholder="Masukan Jenis Kelamin" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" placeholder="Masukan Nama Pasien" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>TANGGAL DATANG</label>
                                <input type="text" name="tgl_datang" placeholder="Masukan Tanggal Datang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>GEJALA</label>
                                <input type="text" name="gejala" placeholder="Masukan Gejala Pasien" class="form-control" required>
                            </div>
                            <!-- <div class="form-group">
                                <label>NAMA PENYAKIT</label>
                                <input type="text" name="nama_penyakit" placeholder="Masukan Nama Penyakit" class="form-control" required>
                            </div>
                            <div class="form-group"> -->
                                <!-- <label>NAMA OBAT</label> -->
                                <!-- <input type="text" name="kelas" placeholder="Masukan GEJALA PENYAKIT" class="form-control" required> -->
                                <!-- <textarea type="text" name="nama_obat" placeholder="Masukan Nama Obat" class="form-control" required rows="5"></textarea>
                            </div> -->
                            <div class="form-group col-md-6">
                                    <!-- <label>NAMA PENYAKIT</label>
                                    <input type="text" name="nama_penyakit" placeholder="Masukan Nama Penyakit" class="form-control" required> -->
                                    <select  class="form-control" name="penyakit_id">
                                        <option disabled selected>-- Pilih Nama Penyakit --</option>
                                        @foreach($datapenyakits as $dtp)
                                            <option value="{{ $dtp->id_penyakit }}"> {{ $dtp->nama_penyakit }} </option>
                                        @endforeach
                                    </select> 
                                </div>
                                <div class="form-group col-md-6">
                                    <!-- <label>NAMA OBAT</label>
                                    <input type="text" name="nama_obat" placeholder="Masukan Nama Penyakit" class="form-control" required> -->
                                    <select  class="form-control" name="obat_id">
                                        <option disabled selected>-- Pilih Nama Obat --</option>
                                        @foreach($dataobats as $dot)
                                            <option value="{{ $dot->id_obat }}"> {{ $dot->nama_obat }} </option>
                                        @endforeach
                                    </select> 
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
