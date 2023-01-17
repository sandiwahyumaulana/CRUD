<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pelanggan'] = Pelanggan::all();
        return view('admin.pelanggan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelanggan.create');
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
    public function edit($id_pelanggan)
    {
        $data['pelanggan'] = Pelanggan::where('id_pelanggan', $id_pelanggan)->first();
        return view('admin.pelanggan.update', $data);
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
            'nama' => 'required',
            'jenis_foto' => 'required',
            'link_foto' => 'required',
            'tanggal' => 'required',
            'biaya' => 'required'

        ],$pesan);

        $id_pelanggan = $request->id_pelanggan;
        $data = Pelanggan::find($id_pelanggan);
        $data->nama = $request->nama;                
        $data->jenis_foto = $request->jenis_foto;                
        $data->link_foto = $request->link_foto;                
        $data->tanggal = $request->tanggal;
        $data->biaya = $request->biaya;

        $data->save();
        if ($data) {
            return redirect('pelanggan')->with('success', 'Update Data Berhasil Dirubah!');
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
        $data = Pelanggan::where('id_pelanggan', $request->id_pelanggan)->first();
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
            'nama' => 'required',
            'jenis_foto' => 'required',
            'link_foto' => 'required',
            'tanggal' => 'required',
            'biaya' => 'required'

        ],$pesan);

        $data = new Pelanggan;
            $data->nama = $request->nama;                
            $data->jenis_foto = $request->jenis_foto;                
            $data->link_foto = $request->link_foto;                
            $data->tanggal = $request->tanggal;
            $data->biaya = $request->biaya;
            $data->save();

        return redirect('pelanggan')->with('success', 'Pelanggan Anda Berhasil Dimasukkan!');
    }
}
