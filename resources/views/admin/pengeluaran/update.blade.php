@extends('layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data Pengeluaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('pengeluaranUpdate')}}">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="jumlah_pengeluaran">Jumlah Pengeluaran</label>
                    <input type="hidden" name="id_pengeluaran" value="{{$pengeluaran->id_pengeluaran}}">
                    <input value="{{ $pengeluaran->jumlah_pengeluaran }}" name="jumlah_pengeluaran" type="textarea" class="form-control" id="jumlah_pengeluaran">
                  </div>                  

	              <div class="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input value="{{$pengeluaran->tanggal}}" name="tanggal" type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal">
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="hidden" name="id_pengeluaran" value="{{$pengeluaran->id_pengeluaran}}">
                    <input value="{{ $pengeluaran->keterangan }}" name="keterangan" type="textarea" class="form-control" id="keterangan">
                  </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-warning"><a href="{{route('pengeluaran')}}">Cancel</a></button>
                </div>
              </form>
            </div>
@endsection