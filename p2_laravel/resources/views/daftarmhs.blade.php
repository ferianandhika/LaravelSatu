<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div style="margin-top: 20px ">
            <div class="row">
                <div class="col-md-4">
                    {{-- <a href="/daftar-siswa" class="btn btn-danger btn-sm">Tampil Semua</a> --}}
                    <form action="{{url('daftarmhs/')}}" method="GET">
                        <div class="form-group">
                            <label for="">Pilih Kelas</label>
                            <select name="kelas" id="" class="form-control form-control-lg">
                                <option value="" {{ old('kelas') == '' ? 'selected' : '' }}>Pilih Kelas</option>
                                <option value="6A" {{ old("kelas")=='6A' ? 'selected' : '' }}>6A</option>
                                <option value="6B" {{ old("kelas")=='6B' ? 'selected' : '' }}>6B</option>
                                <option value="6C" {{ old("kelas")=='6C' ? 'selected' : '' }}>6C</option>
                                <option value="6D" {{ old("kelas")=='6D' ? 'selected' : '' }}>6D</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
                            <a href="/daftarmhs" class="btn btn-dark btn-sm">Lihat Semua</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

        <div class="card mt-auto">
            <div class="header">
                <div class="text-center">
                    <h1>Daftar Mahasiswa</h1>
                </div>
            </div>
            <div class="body">
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftar_mhs as $ds)
                        <tr>
                            <td>{{ $ds->nim }}</td>
                            <td>{{ $ds->nama }}</td>
                            <td scope="row">{{ $ds->kelas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>