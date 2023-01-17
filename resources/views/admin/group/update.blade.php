@extends('layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Group</h3>
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
              <form method="post" enctype="multipart/form-data" action="{{ route('groupUpdate')}}">
              	@csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input name="gambar" type="file" class="form-control" id="gambar" placeholder="Masukkan Gambar">
                  </div>
                  
                <div class="card-body">
                  	<div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="hidden" name="id_group" value="{{$group->id_group}}">
                      <input value="{{ $group->judul }}" name="judul" type="textarea" class="form-control" id="judul" placeholder="Masukkan Nama">
                    </div>

	                  <div class="form-group">
                      <label for="fasilitas">Fasilitas</label>
                      <input type="hidden" name="id_group" value="{{$group->id_group}}">
                      <input value="{{ $group->fasilitas }}" name="fasilitas" type="textarea" class="form-control" id="fasilitas" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="hidden" name="id_group" value="{{$group->id_group}}">
                      <input value="{{ $group->harga }}" name="harga" type="textarea" class="form-control" id="harga" placeholder="Masukkan Nama">
                    </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-warning"><a href="{{route('group')}}">Cancel</a></button>
                </div>
              </form>
            </div>
@endsection