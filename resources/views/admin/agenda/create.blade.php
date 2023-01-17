@extends('layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Agenda</h3>
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
              <form method="post" enctype="multipart/form-data" action="{{ route('agendaKu')}}">
              	@csrf
                <div class="card-body">
                  	<div class="form-group">
                    <label for="nama_agenda">Nama Agenda</label>
                    <input name="nama_agenda" type="textarea" class="form-control" id="nama_agenda" placeholder="Masukkan Nama Agenda">
                  </div>
                  <br>
	              <div class="form-group">
	                    <label for="tanggal_agenda">Tanggal</label>
	                    <input name="tanggal_agenda" type="date" class="form-control" id="tanggal_agenda" placeholder="Masukkan Tanggal Agenda">
	              </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-warning"><a href="{{route('agenda')}}">Cancel</a></button>
                </div>
              </form>
            </div>
@endsection