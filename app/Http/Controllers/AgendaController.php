<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['agenda'] = Agenda::all();
        return view('admin.agenda.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.create');
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
    public function edit($id_agenda)
    {
        $data['agenda'] = Agenda::where('id_agenda', $id_agenda)->first();
        return view('admin.agenda.update', $data);
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
            'nama_agenda' => 'required',
            'tanggal_agenda' => 'required'
        ],$pesan);

        
        $id_agenda = $request->id_agenda;
        $data = Agenda::find($id_agenda);
        $data->nama_agenda = $request->nama_agenda;                
        $data->tanggal_agenda = $request->tanggal_agenda;

        $data->save();
        if ($data) {
            return redirect('agenda')->with('success', 'Update Data Berhasil Dirubah!');

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
        $data = Agenda::where('id_agenda', $request->id_agenda)->first();
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
            'nama_agenda' => 'required',
            'tanggal_agenda' => 'required'
        ],$pesan);

        $data = new Agenda;
                $data->nama_agenda = $request->nama_agenda;                
                $data->tanggal_agenda = $request->tanggal_agenda;
                $data->save();

        return redirect('agenda')->with('success', 'Agenda Anda Berhasil Dimasukkan!');
    }

    public function indexHome()
    {
        $dt['agenda'] = Agenda::limit(3)->orderBy('id_agenda','DESC')->get();       
        return view('welcome', $dt);
    }
}
