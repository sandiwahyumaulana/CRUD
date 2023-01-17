<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['wedding'] = Wedding::all();
        return view('admin.wedding.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wedding.create');
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
    public function edit($id_wedding)
    {
        $data['wedding'] = Wedding::where('id_wedding', $id_wedding)->first();
        return view('admin.wedding.update', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        
        $id_wedding = $request->id_wedding;
        $data = Wedding::find($id_wedding);
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('foto/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();

        }
        $data->judul = $request->judul;                
        $data->fasilitas = $request->fasilitas;
        $data->harga = $request->harga;

        $data->save();
        if ($data) {
            return redirect('wedding')->with('success', 'Update Data Berhasil Dirubah!');
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
        $data = Wedding::where('id_wedding', $request->id_wedding)->first();
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

        $data = new Wedding;
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('foto/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();

        }               
        $data->judul = $request->judul;               
        $data->fasilitas = $request->fasilitas;
        $data->harga = $request->harga;
        $data->save();

        return redirect('wedding')->with('success', 'Agenda Anda Berhasil Dimasukkan!');
    }

    public function foto()
    {
        $dt['wedding'] = Wedding::all();       
        return view('admin.wedding.foto', $dt);
    }
}
