@extends('layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data Agenda</h3>
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
              <form method="post" enctype="multipart/form-data" action="{{ route('agendaUpdate')}}">
              	@csrf
                <div class="card-body">
                  	<div class="form-group">
                    <label for="nama_agenda">Nama Agenda</label>
                    <input type="hidden" name="id_agenda" value="{{$agenda->id_agenda}}">
                    <input value="{{ $agenda->nama_agenda }}" name="nama_agenda" type="textarea" class="form-control" id="nama_agenda" placeholder="Masukkan Nama">
                  </div>

	              <div class="form-group">
                      <label for="tanggal_pemberian_donasi">Tanggal Agenda</label>
                      <input value="{{$agenda->tanggal_agenda}}" name="tanggal_agenda" type="date" class="form-control" id="tanggal_agenda" placeholder="Masukkan Tanggal">
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