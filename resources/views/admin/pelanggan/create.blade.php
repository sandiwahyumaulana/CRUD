@extends('layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pelanggan</h3>
              </div>
              <br>
              <div class="container">
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
               </div>            
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('pelangganKu')}}">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" type="textarea" class="form-control" id="nama" placeholder="Masukkan Nama Pelanggan">
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="jenis_foto">Jenis Foto</label>
                    <input name="jenis_foto" type="textarea" class="form-control" id="jenis_foto" placeholder="Masukkan Jenis Foto">
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="link_foto">Link Foto</label>
                    <input name="link_foto" type="textarea" class="form-control" id="link_foto" placeholder="Masukkan Jenis Foto">
                  </div>
                  <br>

	                <div class="form-group">
	                    <label for="tanggal">Tanggal</label>
	                    <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal">
	                </div>
                  <br>
                 
                  <div class="form-group">
                    <label for="biaya">Biaya</label>
                    <input name="biaya" type="textarea" class="form-control" id="biaya" placeholder="Rp.">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-warning"><a href="{{route('pelanggan')}}">Cancel</a></button>
                </div>
              </form>
            </div>
@endsection