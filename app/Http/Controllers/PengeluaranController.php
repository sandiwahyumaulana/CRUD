<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pengeluaran'] = Pengeluaran::all();
        return view('admin.pengeluaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengeluaran.create');
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
    public function edit($id_pengeluaran)
    {
        $data['pengeluaran'] = Pengeluaran::where('id_pengeluaran', $id_pengeluaran)->first();
        return view('admin.pengeluaran.update', $data);
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
        $id_pengeluaran = $request->id_pengeluaran;
        $data = Pengeluaran::find($id_pengeluaran);
        $data->jumlah_pengeluaran = $request->jumlah_pengeluaran;                
        $data->tanggal = $request->tanggal;                
        $data->keterangan = $request->keterangan;                

        $data->save();
        if ($data) {
            return redirect('pengeluaran')->with('success', 'Update Data Berhasil Dirubah!');
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
        $data = Pengeluaran::where('id_pengeluaran', $request->id_pengeluaran)->first();
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
            'jumlah_pengeluaran' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'           
        ],$pesan);

        $data = new Pengeluaran;
        $data->jumlah_pengeluaran = $request->jumlah_pengeluaran;                
        $data->tanggal= $request->tanggal;                
        $data->keterangan = $request->keterangan;
            $data->save();

        return redirect('pengeluaran')->with('success', 'Data Anda Berhasil Dimasukkan!');
    }
}
