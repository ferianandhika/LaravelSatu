@extends('tampilan')
@section('content')
<div class="container"><br>
    <center><h2><b>DAFTAR JUDUL TUGAS AKHIR</b></h2></center><br><br><br>
    @foreach ($cruds as $c)
    <form action="{{route('crud.update', $c['kode'])}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" placeholder="nama" name="old_name" value="{{ $c['nama'] }}">
        <div class="form-group"> 
        <label>Kode Pegawai :</label>
        <input type="text" class="form-control" placeholder="Kode Pegawai" name="kode" value="{{ $c['kode'] }}" required>
        <div class="invalid-feedback">
        Harap masukkan Kode Pegawai.
        </div>
        </div>
        <div class="form-group"> 
        <label>Nama Lengkap :</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="{{ $c['nama'] }}" required>
        <div class="invalid-feedback">
        Harap masukkan Nama Lengkap.
        </div>
        </div>
        <div class="form-group"> 
        <label>Alamat :</label>
        <input type="text" class="form-control" placeholder="Alamat Anda" name="alamat" value="{{$c['alamat']}}" required>  
        <div class="invalid-feedback">
        Harap masukkan Alamat Anda.
        </div>
        </div>
        <input type="submit" class="btn btn-warning" value="Edit Data">
        <a href="/crud" class="btn btn-outline-warning">Kembali</a>
    </form>
    @endforeach
<!-- JS Validasi -->
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<hr>
<center><b>{} Made In <FONT COLOR="#FF0000">Grusa-Grusu Ora Karuan</font></b></center>

</div>

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Ferian AT</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

@endsection