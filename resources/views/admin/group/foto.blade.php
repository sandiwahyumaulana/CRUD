@extends('layouts.landing2')

@section('content')
<!-- ======= Departments Section ======= -->
<div class="container">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Group</h2>
          <p>Foto Grup adalah foto dengan jumlah orang lebih dari 5 orang biasanya foto grub di pakai untuk foto buku tahunan seklah atau lainnya</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Group</a>
              </li>              
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                @foreach($group as $dt)
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>{{ $dt->judul}}</h3>
                    <p class="fst-italic">Rp.{{ $dt->harga}}<p>
                    <p>{{ $dt->fasilitas}}</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('foto/'.$dt->gambar) }}" alt="" class="img-fluid">
                  </div>
                </div>
                <br>
                @endforeach

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->
</div>
@endsection
