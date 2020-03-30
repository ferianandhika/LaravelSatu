<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftarSiswa;

class DaftarSiswaController extends Controller
{
    public function index(Request $request){
        $kelas = $request->kelas;
        if(empty($kelas)){
           $daftar_siswa =  daftarSiswa::orderBy('kelas', 'ASC')->orderBy('nim','ASC')->get();
        }else{
           $daftar_siswa =  daftarSiswa::where('kelas', $kelas)->orderBy('nim','ASC')->get();
        }
  
        return view('daftarsiswa', compact('daftar_siswa'));
     }
  
     public function kelasA(){
        $daftar_siswa =  daftarSiswa::where('kelas', '6A')->orderBy('nim','ASC')->get();
  
        return view('daftarsiswa', compact('daftar_siswa'));
     }
  
     public function kelasB(){
        $daftar_siswa =  daftarSiswa::where('kelas', '6B')->orderBy('nim','ASC')->get();
  
        return view('daftarsiswa', compact('daftar_siswa'));
     }
  
     public function kelasC(){
        $daftar_siswa =  daftarSiswa::where('kelas', '6C')->orderBy('nim','ASC')->get();
  
        return view('daftarsiswa', compact('daftar_siswa'));
     }
  
     public function kelasD(){
        $daftar_siswa =  daftarSiswa::where('kelas', '6D')->orderBy('nim','ASC')->get();
  
        return view('daftarsiswa', compact('daftar_siswa'));
     }
}
