@extends('layouts.app')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Studio</h5>
              <div class="d-inline-flex flex-row">
                  <a href="{{ route('studioCreate')}}" class="me-2 btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Price List</a>
              </div>
              <hr>
              <!-- Table with stripped rows -->
              <table class="table datatable">                
                <thead>                
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Fasilitas</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $studio as $dt)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                      <img src="{{ asset('foto/'.$dt->gambar) }}" style="width: 40px;">
                    </td>
                    <td>{{ $dt->judul}}</td>
                    <td><span class="d-inline-block text-truncate" style="max-width: 300px;">{{ $dt->fasilitas}}</span></td>                    
                    <td>{{ $dt->harga}}</td>                    
                    <td>
                        <div class="d-inline-flex flex-row">
                            <a href="{{ route('studioEdit', $dt->id_studio) }}" class="btn btn-warning"><i class="fa fa-upload">&nbsp;</i>Update</a>
                            &nbsp;
                            <a href="javascript:void(0)" onclick="hapus_studio(`{{$dt->id_studio}}`)" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </div>
                    </td>
                  </tr>
                  @endforeach                          
                </tbody>                
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

<script>
 function hapus_studio(id_studio) {
    swal({
      title: "Apakah anda Yakin?",
      text: "Ingin Menghapus Data ini",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((result) => {
      if (result == true) {
        $.post("{{ route('studioDestroy') }}",{id_studio:id_studio}).done(function(data) {
          if (data=='success') {
            swal('',"Data berhasil dihapus!","success");
            location.reload();
          }
        }).fail(function() {
          swal('',"Data gagal dihapus!","error");
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        Swal('Batal','Data batal dihapus!','error')
      }
    });
  }


</script>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        
    @if (Session::has('message') && Session::get('status') == 'success')
        @if (Session::get('status') == 'success')
        swal("Success","{{Session::get('message')}}","success")
        @else
            swal("Success","{{Session::get('message')}}","error")
        @endif
    @endif
    </script>
@stop