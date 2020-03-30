@extends('tampilan')
@section('content')
<div class="container"><br>
    <center><h2><b>DAFTAR PEGAWAI PERPUS</b></h2></center><br><br><br>
    <table class="table table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <th><center><b>Kode Pegawai</b></center></th>
            <th><center><b>Nama Lengkap</b></center></th>
            <th><center><b>Alamat</b></center></th>
            <th><center><b>Opsi</b></center></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cruds as $c)
            <tr>
                <td>{{$c['kode']}}</td>
                <td>{{$c['nama']}}</td>
                <td>{{$c['alamat']}}</td>
<!-- Modal -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{route('crud.destroy', $c['kode'])}}" method="post">
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data Pegawai ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak yakin</button>
        @csrf
        <input type="hidden" name="_method" value="DELETE"><input type="hidden" value="{{$c['nama']}}" name="name">
        <input type="submit" class="btn btn-danger" value="Yakin"></form>
        
      </div>
    </div>
  </div>
</div>
                <td><center><a href="{{route('crud.edit',$c['kode'])}}" class="btn btn-warning"><i class="fas fa-user-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus"><i class="fas fa-trash-alt"></i>  
                Hapus</button></center>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
<hr>


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
    