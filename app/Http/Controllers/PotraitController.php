<?php

namespace App\Http\Controllers;

use App\Models\Potrait;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PotraitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['potrait'] = Potrait::all();
        return view('admin.potrait.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.potrait.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id_potrait)
    {
        $data['potrait'] = Potrait::where('id_potrait', $id_potrait)->first();
        return view('admin.potrait.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
                $pesan = [
            'required' => ':Attribute Wajib Diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
        ];
        
        $this->validate($request,[
            'gambar' => 'required',
            'judul' => 'required',
            'fasilitas' => 'required',
            'harga' => 'required'
        ],$pesan);
        
        $id_potrait = $request->id_potrait;
        $data = Potrait::find($id_potrait);
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('foto/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();

        }
        $data->judul = $request->judul;                
        $data->fasilitas = $request->fasilitas;
        $data->harga = $request->harga;

        $data->save();
        if ($data) {
            return redirect('potrait')->with('success', 'Update Data Berhasil Dirubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Potrait::where('id_potrait', $request->id_potrait)->first();
        if (!empty($data)) {
            $data->delete();
            return 'success';
        }else {
            return 'false';
        }
    }

    public function proses(Request $request)
    {
        $pesan = [
            'required' => ':Attribute Wajib Diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
        ];
        
        $this->validate($request,[
            'gambar' => 'required',
            'judul' => 'required',
            'fasilitas' => 'required',
            'harga' => 'required'
        ],$pesan);

        $data = new Potrait;
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('foto/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();

        }               
        $data->judul = $request->judul;               
        $data->fasilitas = $request->fasilitas;
        $data->harga = $request->harga;
        $data->save();

        return redirect('potrait')->with('success', 'Data Anda Berhasil Dimasukkan!');
    }

    public function foto()
    {
        $dt['potrait'] = Potrait::all();       
        return view('admin.potrait.foto', $dt);
    }
}
