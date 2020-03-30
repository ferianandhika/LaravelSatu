<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class CrudController extends Controller
{
    public function index(Request $request){
    $crud = [
        [ 
            'kode' => '091234121',
            'nama' => 'Ferian Andhika Toasi',
            'alamat' => 'Slawi'
        ],
        [ 
            'kode' => '092121821',
            'nama' => 'Laly Gaga',
            'alamat' => 'Tegal'
        ],
        [ 
            'kode' => '092817261',
            'nama' => 'Bryan Fereira',
            'alamat' => 'Brebes'
        ],
        [ 
            'kode' => '098272612',
            'nama' => 'Wirawan Akbar',
            'alamat' => 'Pemalang'
        ]


    ];

    if($request->query('alamat')){
        $crud = array_filter($crud, function($alamat){
            return $alamat['alamat'] == request()->alamat;
        });
    }

    return view('crud', compact('crud'));
}

public function create(){
    return view('create'); 
}

public function store(Request $request){
    $name = $request->name;
    
    return redirect('crud')->with(['success' => 'Berhasil! '.$name.' berhasil ditambahkan']);
}

public function show($crud){
    $cruds = [
        [ 
            'kode' => '091234121',
            'nama' => 'Ferian Andhika Toasi',
            'alamat' => 'Slawi'
        ],
        [ 
            'kode' => '092121821',
            'nama' => 'Laly Gaga',
            'alamat' => 'Tegal'
        ],
        [ 
            'kode' => '092817261',
            'nama' => 'Bryan Fereira',
            'alamat' => 'Brebes'
        ],
        [ 
            'kode' => '098272612',
            'nama' => 'Wirawan Akbar',
            'alamat' => 'Pemalang'
        ]


    ];

    if($crud){
        $cruds = array_filter($cruds, function($id){
            return $id['kode'] == request()->crud;
        });
    }

    return view('detail', compact('cruds')); 
}

public function edit($crud){
    $cruds = [
        [ 
            'kode' => '091234121',
            'nama' => 'Ferian Andhika Toasi',
            'alamat' => 'Slawi'
        ],
        [ 
            'kode' => '092121821',
            'nama' => 'Laly Gaga',
            'alamat' => 'Tegal'
        ],
        [ 
            'kode' => '092817261',
            'nama' => 'Bryan Fereira',
            'alamat' => 'Brebes'
        ],
        [ 
            'kode' => '098272612',
            'nama' => 'Wirawan Akbar',
            'alamat' => 'Pemalang'
        ]

    ];

    if($crud){
        $cruds = array_filter($cruds, function($id){
            return $id['kode'] == request()->crud;
        });
    }

    return view('edit', compact('cruds'));        
}

public function update(Request $request){
    
    if($request->old_name == $request->name){
        return redirect('/crud')->with(['error' => 'Gagal Edit! Data masih sama!']);
    }else{
        return redirect('/crud')->with(['success' => 'Berhasil! mengubah '.$request->old_name.' menjadi '.$request->name]);
    }
}

public function destroy(Request $request){
    $nama = $request->name;
    return redirect('/crud')->with(['success' => 'Berhasil! Data '.$nama.' berhasil dihapus.']);
}
}
