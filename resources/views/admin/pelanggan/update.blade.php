@extends('layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data Pelanggan</h3>
              </div>
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
              <form method="post" enctype="multipart/form-data" action="{{ route('pelangganUpdate')}}">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="id_pelanggan" value="{{$pelanggan->id_pelanggan}}">
                    <input value="{{ $pelanggan->nama }}" name="nama" type="textarea" class="form-control" id="nama" placeholder="Masukkan Nama">
                  </div>

                  <div class="form-group">
                    <label for="jenis_foto">Jenis Foto</label>
                    <input type="hidden" name="id_pelanggan" value="{{$pelanggan->id_pelanggan}}">
                    <input value="{{ $pelanggan->jenis_foto }}" name="jenis_foto" type="textarea" class="form-control" id="jenis_foto" placeholder="Masukkan Nama">
                  </div>

                   <div class="form-group">
                    <label for="link_foto">Link Foto</label>
                    <input type="hidden" name="id_pelanggan" value="{{$pelanggan->id_pelanggan}}">
                    <input value="{{ $pelanggan->link_foto }}" name="link_foto" type="textarea" class="form-control" id="link_foto" placeholder="Masukkan Nama">
                  </div>

	              <div class="form-group">
                      <label for="tanggal_pemberian_donasi">Tanggal</label>
                      <input value="{{$pelanggan->tanggal}}" name="tanggal" type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal">
                </div>

                <div class="form-group">
                    <label for="biaya">Biaya</label>
                    <input type="hidden" name="id_pelanggan" value="{{$pelanggan->id_pelanggan}}">
                    <input value="{{ $pelanggan->biaya }}" name="biaya" type="textarea" class="form-control" id="biaya" placeholder="Masukkan Nama">
                  </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-warning"><a href="{{route('pelanggan')}}">Cancel</a></button>
                </div>
              </form>
            </div>
@endsection