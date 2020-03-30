<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataObat;

class DataObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataobats = DataObat::latest()->get();
        return view('Klinik.Obat.index', compact('dataobats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Klinik.Obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataobat = DataObat::create([
            'nama_obat' => $request->input('nama_obat'),
            'nama_penyakit' => $request->input('nama_penyakit')
            
        ]);

        return redirect(route('dataobats.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DataObat $dataobat)
    {
        return view('Klinik.Obat.edit', compact('dataobat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,DataObat $dataobat)
    {
        $dataobat = DataObat::whereid_obat($dataobat->id_obat)->update([
            'nama_obat' => $request->input('nama_obat'),
            'nama_penyakit' => $request->input('nama_penyakit')
        ]);

        return redirect(route('dataobats.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_obat)
    {
        $dataobat = DataObat::find($id_obat);
        $dataobat->delete();

        return redirect(route('dataobats.index'));
    }
}