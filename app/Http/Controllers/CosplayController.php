<?php

namespace App\Http\Controllers;

use App\Models\Cosplay;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CosplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cosplay'] = Cosplay::all();
        return view('admin.cosplay.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cosplay.create');
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
    public function edit($id_cosplay)
    {
        $data['cosplay'] = Cosplay::where('id_cosplay', $id_cosplay)->first();
        return view('admin.cosplay.update', $data);
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
        
        $id_cosplay = $request->id_cosplay;
        $data = Cosplay::find($id_cosplay);
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('foto/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();

        }
        $data->judul = $request->judul;                
        $data->fasilitas = $request->fasilitas;
        $data->harga = $request->harga;

        $data->save();
        if ($data) {
            return redirect('cosplay')->with('success', 'Update Data Berhasil Dirubah!');
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
        $data = Cosplay::where('id_cosplay', $request->id_cosplay)->first();
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

        $data = new Cosplay;
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('foto/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();

        }               
        $data->judul = $request->judul;               
        $data->fasilitas = $request->fasilitas;
        $data->harga = $request->harga;
        $data->save();

        return redirect('cosplay')->with('success', 'Data Anda Berhasil Dimasukkan!');
    }

    public function foto()
    {
        $dt['cosplay'] = Cosplay::all();       
        return view('admin.cosplay.foto', $dt);
    }
}
