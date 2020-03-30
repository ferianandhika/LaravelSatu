<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar_mhs;

class DaftarMhsController extends Controller
{
    public function index(Request $request, $kelas = null){
        if($kelas==null){
            $kelas = $request->kelas;
        }
        if(empty($kelas)){
           $daftar_mhs =  daftar_mhs::orderBy('kelas', 'ASC')->orderBy('nim','ASC')->get();
        }else{
           $daftar_mhs =  daftar_mhs::where('kelas', $kelas)->orderBy('nim','ASC')->get();
        }
  
        return view('daftarmhs', compact('daftar_mhs'));
        
     }
  
     public function kelasA(){
        $daftar_mhs =  daftar_mhs::where('kelas', '6A')->orderBy('nim','ASC')->get();
  
        return view('daftarmhs', compact('daftar_mhs'));
     }
  
     public function kelasB(){
        $daftar_mhs =  daftar_mhs::where('kelas', '6B')->orderBy('nim','ASC')->get();
  
        return view('daftarmhs', compact('daftar_mhs'));
     }
  
     public function kelasC(){
        $daftar_mhs =  daftar_mhs::where('kelas', '6C')->orderBy('nim','ASC')->get();
  
        return view('daftarmhs', compact('daftar_mhs'));
     }
  
     public function kelasD(){
        $daftar_mhs =  daftar_mhs::where('kelas', '6D')->orderBy('nim','ASC')->get();
  
        return view('daftarmhs', compact('daftar_mhs'));
     }
}
